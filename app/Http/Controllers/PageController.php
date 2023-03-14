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
        foreach ($page_meta as $item){
            switch ($item->meta_type){
                case 'posts':
                    $posts = DB::table('news')->select('id','title')->get();
                    $data['posts'] = $posts;
                    break;
                case 'products':
                    $products = DB::table('products')->select('id','name')->get();
                    $data['products'] = $products;
                    break;
                case 'pd_cat':
                    $pd_cat = DB::table('product_categories')->select('id','name')->get();
                    $data['pd_cat'] = $pd_cat;
                    break;
                case 'news_cat':
                    $news_cat = DB::table('news_categories')->select('id','name')->get();
                    $data['news_cat'] = $news_cat;
                    break;
                case 'brands':
                    $brands = DB::table('brands')->select('id','name')->get();
                    $data['brands'] = $brands;
                    break;
            }
        }
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
            switch($item->meta_type){
                case 'image':
                    $key = $item->meta_key;
                    $item->meta_value = json_encode([
                        'url' => $_POST[$key.'_url'],
                        'alt' => $_POST[$key.'_alt'],
                    ]);
                    $item->save();
                    break;
                case 'link':
                    $key = $item->meta_key;
                    $item->meta_value = json_encode([
                        'url' => $_POST[$key.'_url'],
                        'title' => $_POST[$key.'_title'],
                        'target' => $_POST[$key.'_target'],
                    ]);
                    $item->save();
                    break;
                case 'text':
                case 'textarea':
                case 'editor':
                    $key = $item->meta_key;
                    $item->meta_value = $_POST[$key];
                    $item->save();
                    break;
                case 'news_cat':
                case 'brands':
                case 'pd_cat':
                case 'posts':
                case 'products':
                    $key = $item->meta_key;
                    $item->meta_value = '['.str_replace('"', '', json_encode($_POST[$key])).']';
                    $item->save();
                    break;
                case 'repeater':
                    $arr_parent = [];
                    foreach (json_decode($item->meta_value) as $j => $child){
                        $arr_data = [];
                        foreach ($child as $val){
                            switch($val->child_type) {
                                case 'image':
                                    $key = $val->child_key;
                                    $val = [
                                        'child_key' => $key,
                                        'child_label' => $val->child_label,
                                        'child_type' => 'image',
                                        'child_value' => [
                                            'url' => $_POST[$key.'_url_'.$j],
                                            'alt' => $_POST[$key.'_alt_'.$j],
                                        ]
                                    ];
                                    $arr_data[] = $val;
                                    break;
                                case 'link':
                                    $key = $val->child_key;
                                    $val = [
                                        'child_key' => $key,
                                        'child_label' => $val->child_label,
                                        'child_type' => 'link',
                                        'child_value' => [
                                            'url' => $_POST[$key.'_url_'.$j],
                                            'title' => $_POST[$key.'_title_'.$j],
                                            'target' => $_POST[$key.'_target_'.$j],
                                        ]
                                    ];
                                    $arr_data[] = $val;
                                    break;
                                case 'text':
                                    $key = $val->child_key;
                                    $val = [
                                        'child_key' => $key,
                                        'child_label' => $val->child_label,
                                        'child_type' => 'link',
                                        'child_value' => $_POST[$key.'_'.$j],
                                    ];
                                    $arr_data[] = $val;
                                    break;
                            }
                        }
                        $arr_parent[] = $arr_data;
                    }
                    $item->meta_value = json_encode($arr_parent);
                    $item->save();
                    break;
//                case 'gallery':
            }
        }
        return redirect('/admin/page/update/'.$id);
    }
    public function option(){
        $page_meta = DB::table('page_meta')->where('page_id', 999)->get();
        $data = ['page_meta' => $page_meta];
        foreach ($page_meta as $item){
            switch ($item->meta_type){
                case 'posts':
                    $posts = DB::table('news')->select('id','title')->get();
                    $data['posts'] = $posts;
                    break;
                case 'products':
                    $products = DB::table('products')->select('id','name')->get();
                    $data['products'] = $products;
                    break;
                case 'pd_cat':
                    $pd_cat = DB::table('product_categories')->select('id','name')->get();
                    $data['pd_cat'] = $pd_cat;
                    break;
                case 'news_cat':
                    $news_cat = DB::table('news_categories')->select('id','name')->get();
                    $data['news_cat'] = $news_cat;
                    break;
                case 'brands':
                    $brands = DB::table('brands')->select('id','name')->get();
                    $data['brands'] = $brands;
                    break;
            }
        }
        return view('admin.pages.options', $data);
    }
    public function update_option(){}
}
