<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TinTuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<100; $i++){

            DB::table('news')->insert([
                'user_id' => 1,
                'category_id' => 1,
                'image' => 'images/demo.jpg',
                'title' => 'Đồng hồ nam 21mm'. $i,
                'summary' => 'Sản phẩm đồng hồ mang thương hiệu Elio với nhiều mẫu mã năng động, trẻ trung nhưng không kém phần tinh tế và sang trọng, phù hợp với tất cả mọi người hoạt động ở nhiều lĩnh vực từ dân văn phòng đến doanh nhân.',
                'content' => 'Thiết kế tinh tế với độ hoàn thiện cao, mẫu đồng hồ quartz dành cho các cô nàng nữ tính và dịu dàng
                Đồng hồ Elio ES026-01 là chiếc đồng hồ nữ nằm trong bộ sưu tập Nàng thơ ra mắt đầu năm 2021 đến từ hãng Elio của Việt Nam. Ấn tượng với người dùng bởi thiết kế trẻ trung, dây đeo silicone năng động, nhiều màu sắc, phù hợp cho các bạn gái đeo khi đi chơi, đi học, đi làm. Chiếc đồng hồ kim sử dụng bộ máy có nguồn gốc Nhật Bản - nơi có nền kỹ thuật hàng đầu, cho độ chính xác cao và tính ổn định tốt, bền bỉ với thời gian
                Bền bỉ trước với va đập thông thường
                - Khung viền chịu lực tốt, khả năng chống ăn mòn, chống oxi hóa tốt giúp bảo vệ tốt lõi bên trong đồng hồ.

                - Mặt kính của chiếc đồng hồ Elio nữ trong suốt và có độ cứng cao, hạn chế nứt vỡ khi va chạm ở mức độ vừa phải.',
                'created_at' => now(),
            ]);
        }
    }
}
