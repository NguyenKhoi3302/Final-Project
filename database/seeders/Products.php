<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Arr;
use Str;

class Products extends Seeder
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
        $cat = [1,2,3,4];
        $brands = [1,2,3,4];
        for ($i = 0; $i<100; $i++){

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'CASIO MTP-1370D-7A2VDF ',
                'slug' => 'casio-mtp-1370D-7AVDF',
                'images' => 'images/products/cs1.png',
                'description' => 'CASIO MTP-1370D-7A2VDF – NAM – QUARTZ (PIN) – MẶT SỐ 40MM, KÍNH CỨNG, CHỐNG NƯỚC 5ATM',
                'content'=> '■ Nếu bạn chỉ đang đơn thuần tìm kiếm một chiếc đồng hồ có mức giá bình dân, vẻ ngoài đơn giản cùng những tính năng hợp lý để có thể sử dụng khi đi làm, đi học cũng như trong cuộc sống thường ngày thì phiên bản Casio MTP-1370D-7A2VDF được sản xuất bởi thương hiệu đồng hồ Casio chính là một sự lựa chọn mà bạn không nên bỏ qua..

                Đồng hồ Casio không còn là một thương hiệu quá xa lạ đối với người dùng tại thị trường Việt Nam. Giá thành trên những chiếc Casio được đánh giá là bình dân, không quá cao nhưng về chất lượng thì không có gì phải bàn cãi.

                Bên cạnh các dòng nổi trội về các tính năng đặc biệt như đồng hồ G-Shock, đồng hồ Casio Edifice, về phân khúc đồng hồ nam thương hiệu này vẫn cho ra đời những mẫu đơn giản, có tính ứng dụng cao trong cuộc sống thường ngày..
                
                Và phiên bản Casio MTP-1370D-7A2VDF chính là sản phẩm như thế. Sản phẩm được trang bị những tính năng cơ bản như hiển thị thời gian, hiển thị ô lịch cùng thiết kế đơn giản nhưng nếu phải sử dụng khi đi làm trong môi trường trang trọng thì đây là một sản phẩm hoàn hảo. Tại sao lại như thế, hãy cùng tìm hiểu thông qua bài viết này nhé.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'DANIEL WELLINGTON CLASSIC DW00100007',
                'slug' => 'DANIEL-WELLINGTON-CLASSIC',
                'images' => 'images/products/dw1.png',
                'description' => 'Đồng hồ Daniel Wellington DW00100007 có mặt số tròn với viền mỏng tinh tế, kim chỉ và vạch số dát mỏng nổi bật trên nền số màu trắng trang nhã, dây đeo da màu đen bóng đem đến phong cách thời trang lịch lãm sang trọng cho phái mạnh.',
                'content'=> '■ Chiếm hơn 30% thị phần về đồng hồ thời trang, DW đang đứng ở vị trí thứ 2 sau Casio. Con số này đã nói lên được sức hút của các sản phẩm đến từ nhà thiết kế người Thụy Điển.

                ■ Với nhiều bộ sưu tập khác nhau nhưng đối tượng khách hàng hướng đến đa phần lại là giới trẻ, có cả nam lẫn nữ. Trong số đó có Daniel Wellington DW00100007 – 0107DW là sự lựa chọn mới dành cho nam.
                
                ■ Dĩ nhiên, phải có rất nhiều lý do để thiết kế lần này chinh phục được nhiều tín đồ khác nhau, bao gồm: về giá, chất lượng, bộ máy, kiểu dáng, tính năng, phối màu, chất liệu thiết kế,…',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'DANIEL WELLINGTON ICONIC LINK DW00100482 ',
                'slug' => 'DANIEL-WELLINGTON-ICONIC-LINK',
                'images' => 'images/products/dw2.png',
                'description'=>'DANIEL WELLINGTON ICONIC LINK DW00100482 – NAM – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 40MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 10ATM',
                'content'=>'Chỉ mới thành lập vào năm 2011, Daniel Wellington còn khá non trẻ so với các thương hiệu đồng hồ Nhật Bản, Thụy Sỹ đình đám.

                Tuổi đời nhỏ không có nghĩa là sức ảnh hưởng cũng nhỏ. Nắm bắt tâm lý và xu hướng của khách hàng, DW dần chiếm được tình cảm của đông đảo người dùng và nhanh chóng chen chân vào hàng ngũ những thương hiệu đồng hồ được yêu thích nhất.
                
                DW00100482 là mẫu đồng hồ đeo tay nằm trong bộ sưu tập Iconic Link đình đám của thương hiệu. Sản phẩm được phái mạnh đánh giá cao không chỉ bởi thiết kế nam tính, mà còn nhờ vào khả năng vận hành vượt trội của bộ máy cơ cao cấp.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'TISSOT LE LOCLE T006.407.22.036.00 ',
                'slug' => 'TISSOT-LE-LOCLE',
                'images' => 'images/products/TS1.png',
                'description'=>'TISSOT LE LOCLE T006.407.22.036.00 – NAM – KÍNH SAPPHIRE – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 39.3MM, TRỮ CÓT 80 GIỜ, CHỐNG NƯỚC 3ATM',
                'content'=>'Một trong những cái tên góp phần trong sự phát triển của nền văn minh đồng hồ, Tissot ra đời 1853 và thể hiện được chất lượng của đồng hồ Thụy Sỹ.

                Từ một phân xưởng nhỏ sản xuất đồng hồ tại vùng Locle, đến nay Tissot hơn một thế kỷ tồn tại đã trở thành một thương hiệu sản xuất đồng hồ cao cấp và được đánh giá cao trên mọi mặt trận.
                
                Nổi tiếng với chiếc đồng hồ bỏ túi gắn kim cương sản xuất riêng cho nước Mỹ, tiếp tục với các phiên bản dành cho Sa Hoàng vào 1827.
                
                Sau đó là những mẫu đồng hồ dành cho vận động viên thể thao với độ chống trầy xước, giảm thiểu oxy hóa và chống nhiễm từ…
                
                Hành trình không ngừng nghỉ trong việc đầu tư và phát triển công nghệ đã giúp Tissot trở thành thương hiệu đạt được chứng nhận của Le Concours Internationale de Chronométrie. Một minh chứng về sự hoàn hảo và tỉ mỉ trong từng khâu chế tác, bộ máy vận hành thời gian chính xác.
                
                ',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'TISSOT TRADITION T063.617.36.037.00'.$i,
                'slug' => 'TISSOT-TRADITION'.$i,
                'images' => 'images/products/ts2.png',
                'description' => 'TISSOT TRADITION T063.617.36.037.00 – NAM – QUARTZ (PIN) – MẶT SỐ 42 MM, CHRONOGRAPH, KÍNH SAPPHIRE',
                'content'=> 'Phái mạnh luôn có một sự hứng thú kỳ lạ với tốc độ và thể thao, vì thế họ cần một chiếc đồng hồ với khả năng đo đạc thời gian chính xác, và thế là cỗ máy chronograph ra đời từ đó. Là một cái tên lâu đời trong ngành công nghiệp này, thương hiệu đồng hồ Tissot cũng có cho riêng mình những thiết kế chronograph mạnh mẽ, đơn cử như phiên bản Tissot T063.617.36.037.00.

 

                SỨC HÚT MẠNH MẼ TỪ ĐỒNG HỒ NAM TISSOT T063.617.36.037.00
                Là phiên bản đồng hồ cao cấp của thương hiệu hàng trăm năm tuổi, Tissot T063.617.36.037.00 được xem là có bước đệm tương đối vững chắc. Không khó hiểu tại sao sản phẩm này lại được khách hàng biết đến nhiều như vậy.
                
                Tuy thuộc dòng chronograph nhưng thiết kế tổng thể của đồng hồ lại không mang cảm giác quá thể thao, thay vào đó là sự thanh lịch và sang trọng toát ra từ mặt số và cả bộ phận dây đeo.
                
                Và những lý giải sau đây sẽ cho các bạn biết tại sao Tissot T063.617.36.037.00 lại có một sức hút mạnh mẽ khó cưỡng đối với các quý ông thành đạt.
                
                ',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'DOXA GRANDEMETRE D154TWH ',
                'slug' => 'DOXA-GRANDEMETRE-D154TWH'.$i,
                'images' => 'images/products/dx1.png',
                'description'=>'DOXA GRANDEMETRE D154TWH – NAM – HANDWINDING (LÊN CÓT BẰNG TAY) – MẶT SỐ 40MM, VÀNG 18K, DÂY DA CÁ SẤU, LIMITED EDITION',
                'content'=>'Doxa là một thương hiệu đồng hồ cao cấp đến từ Thụy Sỹ, thành lập vào năm 1889. Hơn 130 năm tồn tại và phát triển, Doxa từng là cái tên đình đám sánh vai cùng với Rolex oanh tạc trên các mặt trận với nhiều bộ sưu tập và siêu phẩm chất lượng.

                Vượt qua giai đoạn khủng hoảng thạch anh ảnh hưởng không ít đến vận hành chung của nền công nghiệp đồng hồ, Doxa hiện nay nổi tiếng với các sản phẩm có số lượng giới hạn, thiết kế đặc trưng khó sao chép và chất lượng tiêu chuẩn Swiss Made.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);   
            
            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'DOXA EXECUTIVE D220SSV',
                'slug' => 'DOXA-EXECUTIVE-D220SSV',
                'images' => 'images/products/dx2.png',
                'description'=>'DOXA EXECUTIVE D220SSV – NAM – KÍNH SAPPHIRE – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 41MM, TRỮ CÓT 38 GIỜ, ĐÍNH 14 VIÊN KIM CƯƠNG',
                'content'=>'Tuy trình làng từ khá sớm, khoảng từ những năm 1889, thế nhưng cái tên Doxa thực sự chỉ mới du nhập vào Việt Nam trong thời gian gần đây, chính vì thế mà không tránh khỏi việc nhiều người chưa biết đến thương hiệu này.

                Theo đó, Doxa là một trong những hãng sản xuất đồng hồ danh giá và chính thống của Thụy Sỹ, có lịch sử phát triển hơn 130 năm và cũng là cái tên đi đầu trong việc sử dụng kim cương thật lên đồng hồ đeo tay.
                
                Những thiết kế của hãng thường không chạy theo xu hướng thời đại, mỗi sản phẩm đều mang đậm nét đặc trưng riêng của thương hiệu này. Đơn cử như phiên bản đồng hồ Doxa nam với số hiệu Doxa D220SSV dưới đây.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'LONGINES ELEGANT L4.910.4.11.6',
                'slug' => 'LONGINES-ELEGANT-L4.910.4.11.6',
                'images' => 'images/products/lg1.png',
                'description'=>'LONGINES ELEGANT L4.910.4.11.6 – NAM – AUTOMATIC – MẶT SỐ 39 MM, TRỮ CÓT 72 GIỜ, KÍNH CHỐNG TRẦY SAPPHIRE',
                'content'=>'Longines là thương hiệu đồng hồ đến từ Thụy Sỹ, thành lập vào năm 1832. Với bề dày kinh nghiệm lâu đời, không quá ngạc nhiên khi ngày nay Longines đã trở thành sự lựa chọn hàng đầu của nhiều quý ông.

                Nhìn vào dòng đồng hồ tự động của họ, từ chất lượng bộ máy đến thiết kế đều được trau chuốt kỹ lưỡng đến từng chi tiết. Trải qua quy trình sản xuất nghiêm ngặt, bộ sưu tập đồng hồ nam của Longines luôn vượt xa các thương hiệu đồng hồ đến từ các quốc gia khác.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'LONGINES LYRE L4.860.2.11.7',
                'slug' => 'LONGINES-LYRE-L4.860.2.11.7',
                'images' => 'images/products/lg2.png',
                'description'=>'LONGINES LYRE L4.860.2.11.7 – NAM – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 35MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 3ATM',
                'content'=>'Longines được thành lập lần đầu năm 1832 bởi Auguste Agassiz, có trụ sở chính đặt tại Saint-Imier, Thụy Sỹ. Sau nhiều năm nghiên cứu, phát triển thương hiệu chính thức bước vào con đường sản xuất đồng hồ với quy mô lớn. Năm 1983, Longines chính thức trở thành thành viên của tập đoàn Swatch danh giá.

                Đồng hồ Longines ngày càng được biết đến nhiều hơn bởi chất lượng chế tác tinh xảo, bộ máy hoạt động chính xác cao. Sức nóng Longines nhanh chóng lan tỏa đến hơn 150 quốc gia trên thế giới. Thông qua các hoạt động kết hợp với nhiều cá nhân, sự kiện lớn, Longines từng bước đến gần hơn với người dùng.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'CITIZEN BI1050-56L',
                'slug' => 'CITIZEN-BI1050-56L',
                'images' => 'images/products/cz1.png',
                'description'=>'CITIZEN BI1050-56L – NAM – QUARTZ (PIN) – MẶT SỐ 41MM, KÍNH CỨNG, CHỐNG NƯỚC 5ATM',
                'content'=>'Đồng hồ Citizen BI1050-56L sở hữu vẻ ngoài có phần đơn giản, không quá cầu kỳ. Nhưng để có thể tạo nên sự thành công cho phiên bản này, thương hiệu đồng hồ Citizen đã tập trung vào quá trình nâng cấp bộ máy cũng như khả năng vận hành của chiếc đồng hồ quartz dành riêng cho phái mạnh này.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'DANIEL WELLINGTON DW00100161',
                'slug' => 'DANIEL-WELLINGTON-DW00100161',
                'images' => 'images/products/dw3.png',
                'description'=>'DANIEL WELLINGTON DW00100161 – NỮ – QUARTZ (PIN) – DÂY KIM LOẠI – MẶT SỐ 32MM',
                'content'=>'Một trong những thương hiệu “sinh sau đẻ muộn” nhưng chiếm trọn được cảm tình của người tiêu dùng đó là đồng hồ Daniel Wellington. Từ khi ra mắt hãng đã gây sốt trên toàn thế giới với thiết kế thời trang, đơn giản và hiện đại. Chiếc đồng hồ Daniel Wellington DW00100161 là sự kết hợp giữa sắc đen cá tính và vàng hồng nữ tính, phong cách đối lập nhau lại tạo nên sự hòa trộn độc đáo.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]); 

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'DANIEL WELLINGTON DW00100245',
                'slug' => 'DANIEL-WELLINGTON-DW00100245',
                'images' => 'images/products/dw4.png',
                'description'=>'DANIEL WELLINGTON DW00100245 – NỮ – QUARTZ (PIN) – MẶT SỐ 28MM, KÍNH CỨNG, CHỐNG NƯỚC 3ATM',
                'content'=>'Nằm trong bộ sưu tập Petite Ashfield thời thượng, chiếc Daniel Wellington DW00100245 giữ nguyên những thiết kế truyền thống của thương hiệu đồng hồ Daniel Wellington như siêu mỏng, tối giản và không tính năng. Đặc biệt, việc phá cách bởi dây lưới đã giúp sản phẩm bán chạy nhất của hãng tính đến thời điểm hiện tại.',
                'price' => rand(1000000, 10000000),
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);
            
            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'CASIO AEQ-110W-3AVDF',
                'slug' => 'CASIO-AEQ-110W-3AVDF',
                'images' => 'images/products/cs2.png',
                'description'=>'CASIO AEQ-110W-3AVDF – NAM – KÍNH NHỰA – QUARTZ (PIN) – DÂY CAO SU',
                'content'=>'Phiên bản Casio AEQ-110W-3AVDF là một trong những mẫu đồng hồ năng động, trẻ trung rất thích hợp với phái mạnh lại sở hữu những tính năng khá nổi bật. Chiếc đồng hồ Casio này còn sở hữu thời lượng sử dụng pin lên đến 10 năm cùng hàng loạt những tính năng nổi bật khác.',
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'CASIO AQ-S810W-1AVDF ',
                'slug' => 'CASIO-AQ-S810W-1AVDF ',
                'images' => 'images/products/cs3.png',
                'description'=>'CASIO AQ-S810W-1AVDF – NAM – KÍNH NHỰA – TOUGH SOLAR (NĂNG LƯỢNG ÁNH SÁNG) – DÂY CAO SU',
                'content'=>'Mẫu Casio AQ-S810W-1AVDF ấn tượng với đồng hồ sử dụng công nghệ hiện đại Tough Solar (Năng lượng ánh sáng), cùng với vẻ ngoài phong cách nam tính với sự kết hợp độc đáo giữa chức năng kim chỉ cùng với nền mặt số điện tử.',
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'CASIO NAM ',
                'slug' => 'CASIO-NAM ',
                'images' => 'images/products/cs4.png',
                'description'=>'CASIO NAM – QUARTZ (PIN) – KÍNH NHỰA – DÂY CAO SU (W-800H-1AVDF)',
                'content'=>'Đồng hồ Casio đã từ lâu là sản phẩm được nhiều người dùng lựa chọn bởi sự bền bỉ theo thời gian. Một trong những mẫu đồng hồ bán chạy nhất của Casio tại Hải Triều là Casio W-800H-1AVDF. Thiết kế mạnh mẽ và nam tính là điều mà mẫu này hướng đến.',
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'DOXA NOBLE D173TCM',
                'slug' => 'DOXA-NOBL-D173TCM',
                'images' => 'images/products/dx3.png',
                'description'=>'DOXA NOBLE D173TCM – NAM – KÍNH SAPPHIRE – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 40MM, TRỮ CÓT 38 GIỜ, ĐÍNH 8 VIÊN KIM CƯƠNG',
                'content'=>'Mẫu Doxa nam D173TCM khoác lên phong cách đẳng cấp khi mặt số với thiết kế tinh xảo đính kèm các viên kim cương nổi bật trên nền kính Sapphire thời trang sang trọng phối cùng mẫu dây đeo demi.',
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'TISSOT PR 100 T101.417.23.061.00',
                'slug' => 'TISSOT-PR-100-T101.417.23.061.00',
                'images' => 'images/products/ts3.png',
                'description'=>'TISSOT PR 100 T101.417.23.061.00 – NAM – QUARTZ (PIN) – MẶT SỐ 41MM, KÍNH CHỐNG TRẦY, CHỐNG NƯỚC 10ATM',
                'content'=>'Phong cách thể thao kiểu dáng 6 kim cùng chức năng bấm giờ Chronograph đầy nam tính trên nền mặt kính Sapphire, không kém phần sang trọng đến từ thương hiệu Tissot dành cho mẫu đồng hồ T101.417.23.061.00 với mẫu kim chỉ cùng vạch số vàng hồng.',
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'TISSOT T086.407.11.051.00',
                'slug' => 'TISSOT-T086.407.11.051.00',
                'images' => 'images/products/ts4.png',
                'description'=>'TISSOT T086.407.11.051.00 – NAM – AUTOMATIC – TRỮ CÓT 80 GIỜ, KÍNH SAPPHIRE, MẶT SỐ 41MM',
                'content'=>'Đồng hồ Tissot T086.407.11.051.00 là phụ kiện thời trang sang trọng, khi được hãng gia công hoàn hảo đến từng chi tiết nhỏ nhất, mang cho đàn ông nét mạnh mẽ, lịch lãm.',
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'SAGA 53555-SVMWSV-2 – NỮ',
                'slug' => 'SAGA-53555-SVMWSV-2–NỮ',
                'images' => 'images/products/sg1.png',
                'description'=>'SAGA 53555-SVMWSV-2 – NỮ – QUARTZ (PIN) – DÂY KIM LOẠI – MẶT SỐ 22.5MM',
                'content'=>'Mẫu Saga 53555-SVMWSV-2 phiên bản mạ bạc thời trang với nền mặt số xà cừ size 22mm nổi bật thiết kế đính pha lê Swarovski kết hợp cùng bộ dây đeo tay kiểu dây lắc.',
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('products')->insert([
                'brand_id' => Arr::random($brands),
                'product_category_id' => Arr::random($cat),
                'name' => 'SAGA 53623-RGBCFBCF-2 – NỮ ',
                'slug' => 'SAGA-53623-RGBCFBCF-2–NỮ ',
                'images' => 'images/products/sg2.png',
                'description'=>'SAGA 53623-RGBCFBCF-2 – NỮ – QUARTZ (PIN) – DÂY DA – MẶT SỐ 34.5MM, KÍNH CỨNG, CHỐNG NƯỚC 3ATM',
                'content'=>'Mẫu Saga 53623-RGBCFBCF-2 dây da phiên bản đính các hạt đá kết hợp cùng thiết kế đơn giản 3 kim, chi tiết kim chỉ được mạ tone màu vàng hồng.',
                'discount' => rand(5, 15),
                'sku' => '0',
                'sex' => rand(0, 3),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);
        
        }
        }
    }
