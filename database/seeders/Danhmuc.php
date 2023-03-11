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
                'id'=>rand(0, 100),
                'name'=>'Trang danh mục',
                'slug'=>'trang-danh-muc',  
                'sort'=> rand(0, 100),
                'created_at'=>'2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

    }
}
}
