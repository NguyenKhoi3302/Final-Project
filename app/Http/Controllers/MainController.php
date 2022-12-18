<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    function index(){
        return view("client/home");
    }
    function shop(){
        return view("client/shop");
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
        return view("client/single-product");
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
}
