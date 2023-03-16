<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\News;
use App\Models\NewsCategories;
use App\Models\NewsComment;

class NewsController extends Controller
{
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
        $author = DB::table('users')->select('name', 'id')->get();
        $cat_list = DB::table('news_categories')->select('name', 'id')->get();
        $data = ['news_list'=>$news_list, 'author' => $author, 'cat_list' => $cat_list];
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
    //comment
    public function comment(){
        $newsComments = NewsComment::with('user','news')->paginate();
        return view('admin.news.comment', compact('newsComments'));
    }
    public function change(Request $request){
        $id = $request->input('id');
        $appear = $request->input('appear');
        $newsComment = NewsComment::find($id);
        $newsComment->appear = $appear;
        $newsComment->save();
        return response()->json(['success' => true, 'status' => 'OK']);
    }
    public function destroy(Request $request){
        $newsCommentDelete = NewsComment::findOrFail($request->id);
        $newsCommentDelete->delete();
        return response()->json(['success' => true]);
    }
}
