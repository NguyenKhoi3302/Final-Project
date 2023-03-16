<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use DB;
use App\Models\coupon;

class AdminController extends Controller
{
    function dashboard(){
        $pd_list = DB::table('products')->whereYear('created_at', date('Y'))->get();
        $pd_details = DB::table('product_details')->get();
        $user_list = DB::table('users')->get();
        $orders = DB::table('orders')->whereYear('created_at', date('Y'))->get();
        $order_details = DB::table('order_detail')->whereYear('created_at', date('Y'))->get();
        $data = ['pd_list'=>$pd_list, 'pd_details'=>$pd_details, 'user_list' => $user_list, 'orders' => $orders, 'order_details' => $order_details];
        return view("admin/dashboard", $data);
    }
    function contact(){
        $email_list = DB::table('email')->get();

        $data = ['email_list' => $email_list];
        return view("admin/contact/index", $data);
    }
    function coupon(){
        $coupon_list = DB::table('coupon')->get();
        $data = ['coupon_list' => $coupon_list];
        return view("admin/coupon/index", $data);
    }
    function add_coupon(){
        return view("admin/coupon/add");
    }
    function add_coupon_(){
        $c = new coupon;
        $c->coupon_code = $_POST['coupon_code'];
        $c->coupon_type = $_POST['coupon_type'];
        $c->description = $_POST['description'];
        $c->discount = $_POST['discount'];
        $c->min_total = $_POST['min_total'];
        $c->max_discount = $_POST['max_discount'];
        $c->date_start = $_POST['date_start'];
        $c->date_expire = $_POST['date_expire'];
        $c->quantity = $_POST['quantity'];
        $c->remaining = $_POST['quantity'];
        $c->save();
        return redirect("admin/coupon");
    }
    function delete_coupon($id){
        $c = coupon::find($id);

        $c->delete();
        return redirect("admin/coupon");
    }
    function media(){
        $medias = DB::table('media')->get();
        return view('admin/media/index', compact('medias'));
    }
    function upload(Request $request){
        $array = [];
        foreach ($request->file('image') as $key => $img){
            $imageName = str_replace(" ","-" ,$img->getClientOriginalName());
            $img->move(public_path('images'), $imageName);
            $array[] = [
                'name' => $imageName,
                'url' => 'images/'.$imageName,
            ];
        }
        Media::insert($array);
        session()->flash('success', 'Image Upload successfully');

        return redirect()->route('admin.media');
    }

    public function popup(){
        $media = DB::table('media')->get();
        return view('admin/media/list', compact('media'));
    }
    public function img_detail($id){
        $image = DB::table('media')->where('id', $id)->first();
        return view('admin/media/detail', compact('image'));
    }

    public function update_img($id){
        $img = Media::find($id);
        $img->alt = $_POST['alt'];

        $img->save();
        return  redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_img($id){
        $img = Media::find($id);

        $img->delete();
        File::delete(public_path($img->url));

        return  redirect('admin/media');
    }
}
