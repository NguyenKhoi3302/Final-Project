<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pages;
use App\Models\pageMeta;

class PageController extends Controller
{
    public function index(){
        $pages = DB::table('pages')->get();
        $data = ['pages' => $pages];
        return view('admin.pages.index', $data);
    }
    public function update_page($id){
        $page = Pages::find($id);
        $page_meta = DB::table('page_meta')->where('page_id', $page->id)->get();
        $data = ['page' => $page, 'page_meta' => $page_meta];
        return view('admin.pages.update', $data);
    }
    public function update_page_($id){
        $p = Pages::find($id);
        $p->title = $_POST['title'];
        $p->description = $_POST['description'];
        $p->keywords = $_POST['keywords'];
        $p->template_id = '1';

        $t = pageMeta::where('page_id', $id)->get();
        foreach ($t as $item){
            if($item->meta_type != 'repeater' && $item->meta_type != 'image' && $item->meta_type != 'gallery' && $item->meta_type != 'products' && $item->meta_type != 'posts' && $item->meta_type != 'link' ){
                $key = $item->meta_key;
                $item->meta_value = $_POST[$key];
                $item->save();
            }
            elseif($item->meta_type == 'image'){
                $key = $item->meta_key;
                $item->meta_value = json_encode([
                    'url' => $_POST[$key.'_url'],
                    'alt' => $_POST[$key.'_alt'],
                ]);
                $item->save();
            }
            elseif($item->meta_type == 'link'){
                $key = $item->meta_key;
                $item->meta_value = json_encode([
                    'url' => $_POST[$key.'_url'],
                    'title' => $_POST[$key.'_title'],
                    'target' => $_POST[$key.'_target'],
                ]);
                $item->save();
            }
            elseif($item->meta_type == 'repeater'){

            }
//            elseif($item->meta_type == 'posts' || $item->meta_type == 'products'){
//
//            }
//            elseif($item->meta_type == 'gallery'){
//
//            }
        }
        return redirect('/admin/page/update/'.$id);
    }
}
