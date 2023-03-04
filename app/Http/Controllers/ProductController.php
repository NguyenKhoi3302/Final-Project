<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductController extends Controller
{
    function shop(){
        $products = DB::table('products')->get()->all();
        return view('client/shop', ['products' => $products]);
    }
    function single_product($id){
        $products = Products::find($id);
        return view("client/single-product", compact('products'));
    }
}
