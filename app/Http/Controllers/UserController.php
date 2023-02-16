<?php

namespace App\Http\Controllers;

use DB;
use Mail;
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
        
        return view('auth.login');
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
        return view('auth.register');
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
            'password.required_with'=>'Vui lòng nhập mật khẩu !',
            // 'password_confrim.same'=>'Mật khẩu xác nhận không đúng !',
            'password.min'=>'Mật khẩu phải bằng hoặc hơn 8 ký tự !',           
            // 'password_confrim.required'=>'Vui lòng xác nhận lại mật khẩu !',
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
            'tel' => $request->tel,
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
        return  view('auth.profile')->with('user', auth()->user());
    }

    public function  profile_action(Request $request)
    {
        User::where('email', $request->email)
                    ->update(['name' => $request->name,
                            'tel' => $request->tel,
                            'address' => $request->address]);
        return redirect()->route('profile')->with('sussec', 'Cập nhập thành công');
    }
// quên mật  khẩu
    public function showForgetPasswordForm()
    {
        return view('auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
        'email' => 'required|email|exists:users',
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
        return view('auth.forgetPasswordLink', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
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
