<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;



class UserController extends Controller
{

// Đăng nhập
    public function login()
    {
        $footer = $this->footer();
        return view('auth.login', compact('footer'));
    }

    public function  login_action(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password' => 'required|min:8',
        ],[
            'email.required'=>'Vui lòng  nhập  email !',
            'password.required'=>'Vui lòng nhập mật khẩu !',
            'password.min'=>'Mật khẩu phải bằng hoặc hơn 8 ký tự !',
        ]);
        Hash::make($request->password);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])){
            if($request->remember){
                Cookie::queue('email', $request->email, 7200);
                Cookie::queue('password', $request->password, 7200);
                return redirect('/');
            }

            return redirect('/');
        }else{
            return redirect()->route('login')->with('fail','Tài khoản hoặc mật khẩu không đúng !!');
        }

    }
// Đăng  ký thành  viên
    public function register()
    {
        $footer = $this->footer();
        return view('auth.register', compact('footer'));
    }

    public function register_action(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'password' => 'required|min:8',
            'password_confrim' => 'required|same:password',
            'email' => 'required|unique:users|regex:/(.*)@(gmail)\.com+$/i',
            'tel' => 'required|digits_between:9,10',
        ],[
            'name.required'=>'Vui lòng  nhập tên  người  dùng !',
            'password.required'=>'Vui lòng nhập mật khẩu !',
            'password_confrim.same'=>'Mật khẩu xác nhận không đúng !',
            'password.min'=>'Mật khẩu phải bằng hoặc hơn 8 ký tự !',
            'password_confrim.required'=>'Vui lòng xác nhận lại mật khẩu !',
            'email.required'=>'Vui lòng  nhập  email !',
            'email.unique'=>'Email đã được đăng ký !',
            'email.regex'=>'Định dạng email không dúng vui  lòng  nhập  lại !',
            'tel.required'=>'Vui lòng  nhập  số điện  thoại !',
            'tel.digits_between'=>'Định dạng số điện thoại không đúng !',

        ]);
        $users = new User([
            'name' => $request->name,
            'password' => hash::make($request->password),
            'email' => $request->email,
            'phone' => $request->tel,
        ]);
        $users->save();
        if($request) {
            return redirect()->route('register')->with('success','Đăng ký thành công !!');
        }
    }
//đăng  xuất
    public function logout(Request $request)
    {
        if($request->remember){
            if(Cookie::has('email')){
                Auth::logout();
                return redirect()->route('login');
            };
        }else{
            Auth::logout();
            return redirect()->route('login');
        }
    }
// thông  tin  cá  nhân
    public function  profile()
    {
        $footer = $this->footer();
        return view("auth/profile", compact('footer'))->with('user', auth()->user());
    }

    public function  profile_edit($id)
    {
        $user = user::find($id);
        $footer = $this->footer();
        $data = ['user' => $user, 'footer' => $footer];
        return view('auth/profileEdit', $data);
    }

    public function profile_update(Request $request, $id){

        $request->validate([
            'name'=>'required',
            'tel' => 'required|digits_between:9,10',
            'address'=>'required',
        ],[
            'name.required'=>'Vui lòng  nhập tên  người  dùng !',
            'tel.required'=>'Vui lòng  nhập  số điện  thoại !',
            'tel.digits_between'=>'Định dạng số điện thoại không đúng !',
            'address.required'=>'Vui lòng  nhập địa  chỉ !',

        ]);
        $user = user::find($id);

        if($request->hasfile('avatar'))
        {
            $file = $request->file('avatar');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/uploads/', $filename);
            $user->avatar = $filename;
        }

        $user->name = $request->input('name');
        $user->phone = $request->input('tel');
        $user->address = $request->input('address');
        $user->update();
        return redirect()->route('profile')->with('sussec','Cập  nhập  thành  công  !!');
    }

    public function pass_update(Request $request){
        $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|confirmed',
        ],[
            'old_password.required'=>'Vui lòng nhập mật khẩu !',
            'old_password.min'=>'Mật khẩu phải bằng hoặc hơn 8 ký tự !',
            'new_password.required'=>'Vui lòng xác nhận lại mật khẩu !',
            'new_password.confirmed'=>'Mật khẩu xác nhận không đúng !',

        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
// quên mật  khẩu
    public function showForgetPasswordForm()
    {
        $footer = $this->footer();
        return view('auth.forgetPassword', compact('footer'));
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
        'email' => 'required|email|exists:users',
        ],[
            'email.required'=>'Vui lòng  nhập  email  quên  mật  khẩu !!',
            'email.email'=>'Định  dạng  không  đúng, vui lòng  nhập  lại !!',
            'email.exists'=>'Email không tồn tại !!',

        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
        'email' => $request->email,
        'token' => $token,
        'created_at' => Carbon::now()
        ]);

        Mail::send('auth.email.forgetPassword', ['token' => $token], function($message) use($request){
        $message->to($request->email);
        $message->subject('Reset Password');
        });

        // Cookie::queue('email', $request->email, 0,5);

        return back()->with('message', 'Chúng tôi đã đặt email liên kêt đặt lại mật khẩu của bạn !');
    }

    public function showResetPasswordForm($token)
    {
        $footer = $this->footer();
        $data = ['token'=> $token, 'footer'=> $footer];
        return view('auth.forgetPasswordLink', $data);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required'
        ],[
            'email.required'=>'Vui lòng  nhập  email  quên  mật  khẩu !!',
            'email.email'=>'Định  dạng  không  đúng, vui lòng  nhập  lại !!',
            'email.exists'=>'Email không tồn tại !!',
            'password.required'=>'Vui lòng nhập mật khẩu !',
            'password.min'=>'Mật khẩu phải bằng hoặc hơn 8 ký tự !',
            'password.confirmed'=>'Mật khẩu xác nhận không đúng !',
            'password_confrim.required'=>'Vui lòng xác nhận lại mật khẩu !',

        ]);


        $updatePassword = DB::table('password_resets')
                            ->where([
                            'email' => $request->email,
                            'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('/login')->with('message', 'Your password has been changed!');
    }


}
