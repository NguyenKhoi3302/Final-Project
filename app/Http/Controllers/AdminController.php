<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
}
