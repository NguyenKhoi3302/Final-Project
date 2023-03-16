<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    //News
    // CRUD create read update delete
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
}