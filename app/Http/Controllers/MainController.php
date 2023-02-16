<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use DB;

class MainController extends Controller
{

    function index(){
        return view("client/home");
    }
    function shop(){
        $products = DB::table('products')->get()->all();
        return view('client/shop', ['products' => $products]);
    }
    function contact(){
        return view("client/contact");
    }
    function about(){
        return view("client/about");
    }
    function cart(){
        return view("client/cart");
    }
    function checkout(){
        return view("client/checkout");
    }
    function product(){
    }
    function news(){
        return view("client/news");
    }
    function single_news(){
        return view("client/single-news");
    }
    function single_product(){
        return view("client/single-product");
    }
    function account_profile(){
        return view("client/account-profile");
    }
}
