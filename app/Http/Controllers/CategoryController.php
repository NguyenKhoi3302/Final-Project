<?php

namespace App\Http\Controllers;

use App\Models\NewsCategories;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    function news_cat(){
        $cat_list = DB::table('news_categories')
            ->orderby('id', 'asc')
            ->get();
        $news_list = DB::table('news')->get();
        return view('admin/news/categories', ['cat_list'=>$cat_list, 'news'=>$news_list]);
    }
    function add_cat(){
        $c = new NewsCategories;
        $c->name = $_POST['name'];
        $c->slug = $_POST['slug'];
        $c->appear = $_POST['appear'];
        $c->save();
        return redirect('admin/news/categories');
    }
    function update_cat($id){
        $cat = NewsCategories::find($id);
        return view('admin/news/update_category', ['cat'=> $cat]);
    }
    function update_cat_($id){
        $c = NewsCategories::find($id);
        $c->name = $_POST['name'];
        $c->slug = $_POST['slug'];
        $c->appear = $_POST['appear'];
        $c->save();
        return redirect('admin/news/categories');
    }
    function delete_cat($id){
        $c = NewsCategories::find($id);
//        if($t == null){
//            return redirect('/thongbao');
//        }
//        else{
        $c->delete();
//        }
        return redirect('admin/news/categories');
    }
}
