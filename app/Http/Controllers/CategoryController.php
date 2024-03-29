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
    function add_cat(Request $request){
        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên danh mục',
            ]
        );
        $c = new NewsCategories;
        $c->name = $_POST['name'];
        if(empty($_POST['slug'])){
            $c->slug = $this->slugConvert($_POST['name']);
        }
        else{
            $c->slug = $this->slugConvert($_POST['slug']);
        }
        $c->description = $_POST['description'];
        $c->keywords = $_POST['keywords'];
        $c->image = $_POST['image'];
        $c->appear = $_POST['appear'];
        $c->sort = 123;
        $c->created_at = now();
        $c->save();
        return redirect('admin/news/categories');
    }
    function update_cat($id){
        $cat = NewsCategories::find($id);
        return view('admin/news/update_category', ['cat'=> $cat]);
    }
    function update_cat_($id, Request $request){
        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên danh mục',
            ]
        );
        $c = NewsCategories::find($id);
        $c->name = $_POST['name'];
        if(empty($_POST['slug'])){
            $c->slug = $this->slugConvert($_POST['name']);
        }
        else{
            $c->slug = $this->slugConvert($_POST['slug']);
        }
        $c->description = $_POST['description'];
        $c->keywords = $_POST['keywords'];
        $c->image = $_POST['image'];
        $c->appear = $_POST['appear'];
        $c->updated_at = now();
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
    function category($slug){
        $cat = DB::table('news_categories')->where('slug', $slug)->first();
        $list_news = DB::table('news')->where('user_id', $cat->id)->Paginate(12);
        $news_cat = DB::table('news_categories')->limit(5)->get();
        $footer = $this->footer();
        $data =['footer'=> $footer, 'list_news' => $list_news,'cat' => $cat, 'news_cat' => $news_cat];
        return view('client.category', $data);
    }
}
