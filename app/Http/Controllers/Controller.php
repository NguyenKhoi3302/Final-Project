<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function footer(){
        $footer_meta = DB::table('page_meta')->where("page_id", 999)->get();
        foreach ($footer_meta as $item){
            switch ($item->meta_key){
                case 'choose_pd_cat_footer':
                    if(!empty($item->meta_value)) {
                        $arr = json_decode($item->meta_value);
                        $pd_cat_footer = DB::table('product_categories')->whereIn('id', $arr)->get();
                    }
                    else{
                        $pd_cat_footer = DB::table('product_categories')->limit(3)->get();
                    }
                    break;
                case 'choose_news_cat_footer':
                    if(!empty($item->meta_value)) {
                        $arr = json_decode($item->meta_value);
                        $news_cat_footer = DB::table('news_categories')->whereIn('id', $arr)->get();
                    }
                    else{
                        $news_cat_footer = DB::table('news_categories')->limit(3)->get();
                    }
                    break;
            }
        }
        $footer = ['footer_meta' => $footer_meta, 'pd_cat_footer' => $pd_cat_footer, 'news_cat_footer' => $news_cat_footer];
        return $footer;
    }
}
