<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Arr;
use Str;

class ProductsDetails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['Dark blue', 'Red', 'Wood', 'White', 'Black', 'Wheat', 'Green'];
        $sizes = ['46mm', '36mm', '31mm', '40mm', '32mm', '33mm', '37mm'];
        for($i = 0; $i<500; $i++){
            DB::table('product_details')->insert([
                'product_id' => rand(1, 100),
                'color' => Arr::random($colors),
                'size' => Arr::random($sizes),
                'quantity' => rand(0, 20),
            ]);
        }
    }
}
