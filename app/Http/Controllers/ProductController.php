<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductController extends Controller
{
    function shop(){
        $page = DB::table('pages')->where('name', 'Sản phẩm')->first();
        $products = DB::table('products')->orderBy('created_at', 'desc')->Paginate(12);
        $cats = DB::table('product_categories')->get();
        $brands = DB::table('brands')->get();
        $footer = $this->footer();
        $data = ['footer'=> $footer, 'products'=>$products, 'cats' => $cats, 'brands' => $brands, 'page'=>$page];
        return view('client.shop', $data);
    }
    function single_product($id){
        $products = Products::find($id);
        $footer = $this->footer();
        $data = ['footer'=> $footer, 'products' => $products];
        return view("client.single-product", $data);
    }
}
