<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\News;
use App\Models\NewsCategories;

class NewsController extends Controller
{
    public function filter(Request $request){
        $category_id = $request->input('category_id');
        $search = $request->input('search');
        $appear = $request->input('appear');
        $hot = $request->input('hot');

        $news_list = DB::table('news')
            ->orderBy('id','desc')
            ->when($category_id, function ($query) use ($category_id) {
                return $query->where('category_id', $category_id);
            })
            ->when($appear != null, function ($query) use ($appear) {
                return $query->where('appear', $appear);
            })
            ->when($hot != null, function ($query) use ($hot) {
                return $query->where('hot', $hot);
            })
            ->when($search, function ($query) use ($search) {
                return $query->where('title', 'like', "%$search%");
            })
            ->get();

        $author = DB::table('users')->select('name', 'id')->get();
        $cat_list = DB::table('news_categories')->select('name', 'id')->get();
        $html = view('Modals.back_end.new_load')
            ->with(['news_list'=>$news_list, 'author' => $author, 'cat_list' => $cat_list,])
            ->render();
        return response()->json(['BODY' => $html]);
    }

    public function index(){
        $news = DB::table('news')->Paginate(12);
        $cat = DB::table('news_categories')->get();
        $data = ['cat'=>$cat, 'news' => $news];
        return view('client.news', $data);
    }

    public function single_news($id){
        $kq = DB::table('news')->WHERE('id', $id)->first();
        $list = DB::table('news')->limit(5)->get();
        $data = ['list'=>$list, 'kq' => $kq];
        return view("client.single-news", $data);
    }

    public function home(){
        $home = DB::table('news')->get();
        $nha = DB::table('news')->limit(5)->get();
        // dd($nha);
        $sp = DB::table('products')->get();
        $new =  DB::table('products')->limit(9)->get();
        $data = ['nha'=>$nha, 'home' => $home, 'sp'=>$sp, 'new'=>$new ];
        return view("client.home", $data);
    }
    function news_list(){
        $news_list = DB::table('news')
            ->orderBy('id','desc')
            ->Paginate(20);
        $cata  = NewsCategories::all();
        $author = DB::table('users')->select('name', 'id')->get();
        $cat_list = DB::table('news_categories')->select('name', 'id')->get();
        $data = ['news_list'=>$news_list, 'author' => $author, 'cat_list' => $cat_list, 'cate_all' => $cat_list];
        return view("admin/news/index", $data);
    }
    function add(){
        $cat = DB::table('news_categories')->get();
        return view("admin/news/add", ['cat'=> $cat]);
    }
    function add_(){
        $n = new News;
        $n->hot = $_POST['hot'];
        $n->category_id = $_POST['category_id'];
        $n->user_id = 1;
        $n->image = $_POST['image'];
        $n->title = $_POST['title'];
        $n->summary = $_POST['summary'];
        $n->content = $_POST['content'];
        $n->appear = $_POST['appear'];
        $n->save();
        return redirect('admin/news');
    }
    function hot($id){
        $news = News::find($id);
        if($news->hot == 0){
            $news->hot = 1;
        }
        else{
            $news->hot = 0;
        }
        $news->save();
        return redirect('admin/news');
    }
    function appear($id){
        $news = News::find($id);
        if($news->appear == 0){
            $news->appear = 1;
        }
        else{
            $news->appear = 0;
        }
        $news->save();
        return redirect('admin/news');
    }
    function update($id){
        $n = News::find($id);
        $cat = DB::table('news_categories')->get();
        return view('admin/news/update', ['news'=>$n, 'cat'=> $cat]);
    }
    function update_($id){
        $n = News::find($id);
        $n->hot = $_POST['hot'];
        $n->category_id = $_POST['category_id'];
        $n->user_id = 1;
        $n->image = $_POST['image'];
        $n->title = $_POST['title'];
        $n->summary = $_POST['summary'];
        $n->content = $_POST['content'];
        $n->appear = $_POST['appear'];
        $n->save();
        return redirect('admin/news');
    }
    function delete($id){
        $t = News::find($id);
//        if($t == null){
//            return redirect('/thongbao');
//        }
//        else{
        $t->delete();
//        }
        return redirect('admin/news');
    }
}
