<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

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
    function single_product($slug){
        $products = Product::where('slug',$slug)->first();
        $id = $products->id;
        $productLimit  = DB::table('products')->where('id', '=', $products->pr_category_id)->limit(4)->get();
        $productsDetail  = DB::table('product_details')->where('product_id', '=', $id)->get();
        $brands = DB::table('brands')->where('id', '=', $products->brand_id)->get();
        $cats = DB::table('product_categories')->where('id', '=', $products->pr_category_id)->get();
        $footer = $this->footer();
        $data = ['footer'=> $footer, 'products' => $products, 'productsDetail'=>$productsDetail, 'brands'=>$brands, 'cats'=>$cats,'productLimit'=>$productLimit];
        // $data = ['footer'=> $footer, 'products' => $products];
        return view("client.single-product", $data);
    }
    public function search(Request $request){
        $keyword = $request->q;
        $footer = $this->footer();
        $products = Product::where('name','like','%'. $keyword.'%')->paginate(8);
        $data = ['footer'=> $footer, 'products' => $products];
        return view('client.search', $data);
    }

    //ssắp xếp theo thường hiệu
    function fillter_brand(Request $request){
        $products = DB::table('products')->where('pr_category_id', '=', $request->id )->orderBy('created_at', 'desc')->Paginate(12);
        $cats = DB::table('product_categories')->get();
        $brands = DB::table('brands')->get();
        $footer = $this->footer();
        $data = ['footer'=> $footer, 'products'=>$products, 'cats' => $cats, 'brands' => $brands];
        return view ('client.shop-fillter', $data);
    }
    //ssắp xếp theo loại
    function fillter_category(Request $request){
        $products = DB::table('products')->where('brand_id', '=', $request->id )->orderBy('created_at', 'desc')->Paginate(12);
        $cats = DB::table('product_categories')->get();
        $brands = DB::table('brands')->get();
        $footer = $this->footer();
        $data = ['footer'=> $footer, 'products'=>$products, 'cats' => $cats, 'brands' => $brands];
        return view ('client.shop-fillter', $data);
    }
    //sắp xếp kiểu giảm dần
    function fillter_decrease(){
        $products = DB::table('products')->orderBy('price', 'desc')->Paginate(12);
        $cats = DB::table('product_categories')->get();
        $brands = DB::table('brands')->get();
        $footer = $this->footer();
        $data = ['footer'=> $footer, 'products'=>$products, 'cats' => $cats, 'brands' => $brands];
        return view ('client.shop-fillter', $data);
    }
    //sắp xếp kiểu tăng dần
    function fillter_ascending(){
        $products = DB::table('products')->orderBy('price', 'asc')->Paginate(12);
        $cats = DB::table('product_categories')->get();
        $brands = DB::table('brands')->get();
        $footer = $this->footer();
        $data = ['footer'=> $footer, 'products'=>$products, 'cats' => $cats, 'brands' => $brands];
        return view ('client.shop-fillter', $data);
    }
    //sắp xếp theo lượt xem
    function fillter_view(){
        $products = DB::table('products')->orderBy('view', 'desc')->Paginate(12);
        $cats = DB::table('product_categories')->get();
        $brands = DB::table('brands')->get();
        $footer = $this->footer();
        $data = ['footer'=> $footer, 'products'=>$products, 'cats' => $cats, 'brands' => $brands];
        return view ('client.shop-fillter', $data);
    }
}
