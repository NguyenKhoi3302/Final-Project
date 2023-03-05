<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Products;

class ProductController extends Controller
{
    function shop(){
        $products = DB::table('products')->orderBy('created_at', 'desc')->Paginate(12);
        $cats = DB::table('product_categories')->get();
        $brands = DB::table('brands')->get();
        $data = ['products'=>$products, 'cats' => $cats, 'brands' => $brands];
        return view('client/shop', $data);
    }
    function single_product($id){
        $products = Products::find($id);
        return view("client/single-product", compact('products'));
    }
}
