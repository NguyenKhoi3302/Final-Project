<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Arr;
use Str;

class Tintuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<10; $i++){

            DB::table('news')->insert([
                'user_id' => 1,
                'category_id' => 1,
                'image' => 'images/news/news_2.jpg',
                'title' => 'TIÊU CHUẨN TỦ TRƯNG BÀY ĐỒNG HỒ ĐEO TAY ĐẸP TẠI S_Watch'. $i,
                'summary' => 'Không chỉ tuân thủ hai nguyên tắc trưng bày “phù hợp” và “đúng kỹ thuật”, tủ trưng bày tại Đồng Hồ Hải Triều còn vượt qua nhiều tiêu chuẩn khác, đáp ứng và hoàn thiện điều kiện showroom đạt chuẩn Thụy Sỹ.',
                'content' => 'Là một đại lý phân phối hàng loạt thương hiệu đồng hồ cao cấp đến từ Thụy Sỹ như Longines, Doxa, Tissot, Rado… Hải Triều hiểu rằng nhóm khách hàng của mình cần nhiều hơn một mẫu đồng hồ chất lượng.
                - Tiêu chuẩn trưng bày của các hãng đồng hồ cao cấp yêu cầu rõ ràng về số lượng sản phẩm trên kệ, phương pháp đặt để sản phẩm, chất lượng tủ đạt thẩm mỹ.
                - Một trong những tiêu chuẩn khác chính là tủ trưng bày là điều kiện cần cho việc bảo quản một chiếc đồng hồ giá trị.

                Trong quá trình đồng hồ về tay chủ nhân phù hợp, khách hàng hoàn toàn yên tâm rằng các sản phẩm luôn được bảo quản theo đúng tiêu chuẩn.
                Từng mẫu đều đặt để trên một giá đỡ đồng hồ tương ứng. Việc đặt trong tủ và kệ trưng bày này hạn chế tác nhân ảnh hưởng từ môi trường bên ngoài.
                ',
                'created_at' => now(),
            ]);
        }

    }

}