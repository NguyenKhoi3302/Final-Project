<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Arr;
use Str;

class Order_Details extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $day = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28];
        $month = [2,3,4,5,6,7,8];
        for($i = 0; $i < 1000; $i++){
            DB::table('order_detail')->insert([
                'order_id' => rand(1, 500),
                'product_id' => rand(1,100),
                'quantity' => rand(1,3),
                'price' => rand(1000000, 10000000),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);
        }
    }
}
