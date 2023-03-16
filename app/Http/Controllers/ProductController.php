<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    function shop(){
        $products = DB::table('products')->orderBy('created_at', 'desc')->Paginate(12);
        $cats = DB::table('product_categories')->get();
        $brands = DB::table('brands')->get();
        $data = ['products'=>$products, 'cats' => $cats, 'brands' => $brands];
        return view('client.shop', $data);
    }
    function single_product($id){
        $product = Product::find($id);
        return view("client.single-product", compact('product'));
    }
    public function search(Request $request){
        $keyword = $request->q;
        $products = Product::where('name','like','%'. $keyword.'%')->paginate(8);
        return view('client.search',compact('products'));
    }
}
