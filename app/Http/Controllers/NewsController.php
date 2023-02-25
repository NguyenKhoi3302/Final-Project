<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    //News
    // CRUD create read update delete
    public function index(){
        $news = DB::table('news')->Paginate(6);
        return view('client.news',compact('news'));
    }

    public function single_news($id){
        $kq = DB::table('news')->WHERE('id', $id)->first();
        $list = DB::table('news')->limit(5)->get();
        $data = ['list'=>$list, 'kq' => $kq];
        return view("client.single-news", $data);
    }
}