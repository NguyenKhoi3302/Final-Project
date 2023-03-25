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

    function filter(){
        $cat_id = $_POST['pd_cat'];
        $brand = $_POST['brand'];
        $sortby = $_POST['sort_by'];
        $sort = $_POST['sort'];
        if($brand != 'all' && $cat_id == 'all'){
            $products = DB::table('products')->where('brand_id', $brand)->orderBy($sortby, $sort)->Paginate(12);
        }
        elseif($brand == 'all' && $cat_id != 'all'){
            $products = DB::table('products')->where('pr_category_id', $cat_id)->orderBy($sortby, $sort)->Paginate(12);
        }
        elseif($brand !='all' && $cat_id != 'all'){
            $products = DB::table('products')->where([
                ['pr_category_id', $cat_id],
                ['brand_id', $brand],
            ])->orderBy($sortby, $sort)->Paginate(12);
        }
        else{
            $products = DB::table('products')->orderBy($sortby, $sort)->Paginate(12);
        }
        return view('Modals.shop', compact('products'));
    }
}
