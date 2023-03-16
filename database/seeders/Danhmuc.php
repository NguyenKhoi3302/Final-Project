<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Arr;
class Danhmuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $day = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28];
        $month = [1,2,3,4,5,6,7,8,9,10];
        for ($i = 0; $i<10; $i++){
            DB::table("news_categories")->insert([
                'id'=>rand(1,100),
                'name'=>'ĐỒNG HỒ MOVADO SERIES 800 CÓ GÌ ĐẶC BIỆT, GIÁ BÁN, NƠI MUA'.$i,
                'slug'=>'dong-ho-movado-series-800-'.$i,
                'sort'=> rand(1, 100),
                'created_at'=>'2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table("news_categories")->insert([
                'id'=>rand(1,100),
                'name'=>'ĐỒNG HỒ RADO CỔ: GIÁ, DÒNG SẢN PHẨM NỔI BẬT, CÁCH PHÂN BIỆT'.$i,
                'slug'=>'dong-ho-rado-co-'.$i,
                'sort'=> rand(1, 100),
                'created_at'=>'2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 

            DB::table("news_categories")->insert([
                'id'=>rand(1,100),
                'name'=>'ĐỒNG HỒ CASIO F-91W CHÍNH HÃNG GIÁ BAO NHIÊU, REVIEW TỪ A-Z'.$i,
                'slug'=>'dong-ho-casio-f-91w-'.$i,
                'sort'=> rand(1, 100),
                'created_at'=>'2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 

            DB::table("news_categories")->insert([
                'id'=>rand(1,100),
                'name'=>'TỪ ĐIỂN KIẾN THỨC ĐỒNG HỒ, TRA CỨU Ý NGHĨA, GIẢI THÍCH THUẬT NGỮ ANH-VIỆT'.$i,
                'slug'=>'tu-dien-kien-thuc-dong-ho-'.$i,
                'sort'=> rand(1, 100),
                'created_at'=>'2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 

            DB::table("news_categories")->insert([
                'id'=>rand(1,100),
                'name'=>'5 MẪU DOXA LIMITED EDITION ĐỘC ĐÁO NHẤT, GIÁ VÀ NƠI MUA'.$i,
                'slug'=>'5-mau-doxa-limited-edittion-doc-dao-nhat-'.$i,
                'sort'=> rand(1, 100),
                'created_at'=>'2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 
    }
}
}
