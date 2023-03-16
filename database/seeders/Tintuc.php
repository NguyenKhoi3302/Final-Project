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
        $day = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28];
        $month = [1,2,3,4,5,6,7,8,9,10];
        $cat = [1,2,3,4];
        $brands = [1,2,3,4];
        for ($i = 0; $i<10; $i++){

            DB::table('news')->insert([
                'user_id' => rand(1, 5),
                'category_id' => 1,
                'image' => 'images/news/news_2.jpg',
                'title' =>'TIÊU CHUẨN TỦ TRƯNG BÀY ĐỒNG HỒ ĐEO TAY ĐẸP TẠI S_Watch'. $i,
                'summary' => 'Không chỉ tuân thủ hai nguyên tắc trưng bày “phù hợp” và “đúng kỹ thuật”, tủ trưng bày tại S_Watch còn vượt qua nhiều tiêu chuẩn khác, đáp ứng và hoàn thiện điều kiện showroom đạt chuẩn Thụy Sỹ.',
                'content' => 'TỦ TRƯNG BÀY ĐỒNG HỒ ĐEO TAY CỦA S_Watch ĐÃ ĐÁP ỨNG NHỮNG TIÊU CHÍ NÀO?
                Điểm khác biệt của S_Watch chính là đầu tư đem đến trải nghiệm mua hàng hoàn hảo cho khách hàng. Và để thực hiện được, S_Watch đã không ngần ngại đầu tư kỹ lưỡng để đáp ứng các điều kiện khắt khe dưới đây.
                1. ĐẠT TIÊU CHUẨN TRƯNG BÀY CỦA CÁC HÃNG ĐỒNG HỒ CAO CẤP
                Là một đại lý phân phối hàng loạt thương hiệu đồng hồ cao cấp đến từ Thụy Sỹ như Longines, Doxa, Tissot, Rado… Hải Triều hiểu rằng nhóm khách hàng của mình cần nhiều hơn một mẫu đồng hồ chất lượng.
                
                Tiêu chuẩn trưng bày của các hãng đồng hồ cao cấp yêu cầu rõ ràng về số lượng sản phẩm trên kệ, phương pháp đặt để sản phẩm, chất lượng tủ đạt thẩm mỹ.
                Ngoài ra còn cộng hưởng nhiều yếu tố khác ảnh hưởng đến hình ảnh bày trí như:
                    
                    ✔ Sắp xếp gần các thương hiệu có cùng phong cách hoặc phân khúc giá để người mua có thể dễ dàng so sánh và lựa chọn sản phẩm thật sự phù hợp.

                    ✔ Khoảng cách đặt giữa các mẫu tạo điểm dừng và chú ý. Như vậy, người mua không bị choáng ngợp bởi quá nhiều sản phẩm, vừa đáp ứng sự thẩm mỹ trong cách bày trí.

                    ✔ Những mẫu cao cấp và giá trị hơn được đặt riêng biệt tương xứng.

                    ✔ Ánh sáng phù hợp, có độ sáng đầu ra (Lumen) đạt tiêu chuẩn trưng bày quốc tế, giúp tăng trải nghiệm mua sắm và hấp dẫn thị giác khách hàng. Đồng thời, thương hiệu cũng được nhận diện một cách sang trọng hơn.

                    ✔ Đa dạng kích thước tủ, phù hợp số lượng trưng bày từng thương hiệu.
                    
                Vượt qua “hàng tá” tiêu chuẩn không mấy dễ dàng, bài toán có vẻ “đau đầu” mà không có khá nhiều đại lý bán lẻ có thể trụ vững đem đến trải nghiệm mua sắm cho khách hàng của mình.
                <p>2. BẢO QUẢN ĐỒNG HỒ TỐT HƠN
                Một trong những tiêu chuẩn khác chính là tủ trưng bày là điều kiện cần cho việc bảo quản một chiếc đồng hồ giá trị.

                Trong quá trình đồng hồ về tay chủ nhân phù hợp, khách hàng hoàn toàn yên tâm rằng các sản phẩm luôn được bảo quản theo đúng tiêu chuẩn.
                Từng mẫu đều đặt để trên một giá đỡ đồng hồ tương ứng. Việc đặt trong tủ và kệ trưng bày này hạn chế tác nhân ảnh hưởng từ môi trường bên ngoài.
                ',
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('news')->insert([
                'user_id' => rand(1, 5),
                'category_id' => 1,
                'image' => 'images/news/news_3.jpg',
                'title' => 'CÁCH ĐO, CHỌN SIZE ĐỒNG HỒ ĐEO TAY NAM, NỮ CHUẨN, DỄ HIỂU'. $i,
                'summary' => 'Để chọn được một chiếc đồng hồ đeo tay nam hoặc nữ ưng ý thì cách đơn giản nhất thiết thực nhất vẫn là bạn đến trực tiếp shop để lựa chọn. Nhưng nếu như bạn ở quá xa, hoặc không có thời gian thì chúng ta phải làm thế nào? Hãy cùng tham khảo ngay cách chọn size đồng hồ thực sự phù hợp với cổ tay.',
                'content' => 'CÁCH CHỌN SIZE ĐỒNG HỒ THEO KÍCH THƯỚC CỔ TAY
                Dù bạn mua để sử dụng hay để tặng, thì một chiếc đồng hồ đeo tay chỉ thật sự đẹp khi nó phù hợp với bạn, hay nói một cách chính xác hơn là phù hợp với cổ tay của bạn. Và bài chia sẻ về cách chọn mua đồng hồ đeo tay này sẽ giúp bạn xác định điều đó một cách đơn giản nhất. 
                1. CÁC BƯỚC CHỌN SIZE ĐỒNG HỒ ĐEO TAY
Để có thể chọn được một chiếc đồng hồ đeo tay nam hoặc nữ vừa với cổ tay bạn hãy thực hiện theo 3 bước đơn giản như hướng dẫn bên dưới nhé.

Bước 1: Đo “size tay” của bạn (Chu vi cổ tay)

Để đo chu vi cổ tay bạn chỉ cần thực hiện theo một số cách đơn giản như sau:

Cách 1: Dùng thước dây đo 1 vòng quanh cổ tay, bạn lưu ý là đo ở vị trí mà bạn đeo đồng hồ ấy nha.
Cách 2: Trường hợp bạn không có thước dây thì làm thế nào? Đơn giản thôi bạn hãy dùng một tờ giấy quấn quanh cổ tay, sau đó hãy đo lại bằng thước kẻ tay thông thường.
Bước 2:  Tra bảng cách chọn Size đồng hồ đeo tay ở bên dưới (áp dụng cho nam và nữ luôn nha)

Sau khi biết được chu vi cổ tay rồi bạn hãy dùng nó để đối chiếu với bảng bên dưới xem với số đo như thế ta nên chọn Size đồng hồ nào là tối ưu nhất nhé.
Ví dụ: Tay mình size 15cm thì nên chọn đồng hồ đeo tay nam như thế nào cho phù hợp nhĩ?

Size tay (chu vi cổ tay) của bạn là 15cm = 150mm, đối chiếu với bảng (bảng cách chọn mua đồng hồ đeo tay bên dưới nha) thì ta nên chọn size đồng hồ tối ưu là 32-34mm. Nhưng không nhất thiết là phải chỉ được chọn size trong khoảng 32-34, nếu bạn thích to hơn hay nhỏ hơn một chút thì vẫn được nhé (to hơn bạn chọn 36, và bé hơn bạn chọn 30 nha)


2. CÁCH ĐO SIZE ĐỒNG HỒ ĐEO TAY LÀM QUÀ TẶNG
Bạn muốn chọn một chiếc đồng hồ đeo tay nam hoặc nữ để làm quà tặng cho bạn bè, người thân trong gia đình nhưng không biết Size cổ tay của họ, làm thế nào bây giờ?

Đơn giản thôi hãy bạn hãy chọn Size đồng hồ đeo tay trong khoảng an toàn như sau nhé:

Size đồng hồ nam: 39 – 42mm
Size đồng hồ nữ: 29 – 34mm
 

Bên cạnh đó thì nữ vẫn có thể đeo đồng hồ nam bình thường nếu quá yêu thích mẫu đó. Và sẽ có một vài tips nhỏ để các cô nàng cá tính dễ dàng hơn trong việc lựa chọn đồng hồ nam hoặc unisex chẳng hạn
Size mặt đồng hồ theo chuẩn Quốc Tế như sau:

Women’s Mini (đồng hồ nữ – size nhỏ): 23mm – 25mm
Women’s Regular (đồng hồ nữ – size thông thường): 26mm – 29mm
Midsize – Unisex (nam hoặc nữ đều đeo được): 34mm – 36mm
Men’s Regular (đồng hồ nam – size thông thường): 37mm – 39mm
Men’s Sport (đồng hồ nam – size thể thao): 40mm – 42mm
Men’s XL (đồng hồ nam – size lớn, rất lớn): 45mm
Midsize: là kích thước phù hợp cho nữ giới thích chọn đồng hồ đeo tay lớn hơn so với bình thường. Hầu hết nam giới sẽ thấy kích thước này hơi nhỏ, tuy nhiên với một số người có cổ tay nhỏ thì ta nên lựa chọn size này cho phù hợp với “cơ địa” của mình.',
'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('news')->insert([
                'user_id' => rand(1, 5),
                'category_id' => 1,
                'image' => 'images/news/news4.jpg',
                'title' => 'MUA ĐỒNG HỒ TRẢ GÓP 0% TẠI HẢI TRIỀU QUA MIRAE ASSET'. $i,
                'summary' => 'Với mong muốn tạo điều kiện cho nhiều khách hàng có cơ hội sở hữu đồng hồ chính hãng, Hải Triều đã liên liên kết với các ngân hàng và công ty tài chính uy tín là Fundiin, Mirae Asset để triển khai chương trình mua đồng hồ trả góp với nhiều hình thức thanh toán đa dạng',
                'content' => 'CHƯƠNG TRÌNH MUA ĐỒNG HỒ TRẢ GÓP BẰNG MIRAE ASSET VÀ FUNDIIN
                Giờ đây, những tín đồ đam mê đồng hồ tại thị trường Việt Nam hoàn toàn có cơ hội sở hữu đồng hồ chính hãng từ nhiều quốc gia trên thế giới, mà không cần bỏ ra số tiền ban đầu quá lớn nhờ chính sách mua đồng hồ trả góp đang được áp dụng tại S_Watch.
                1. MUA ĐỒNG HỒ TRẢ GÓP QUA MIRAE ASSET
Mirae Asset là công ty tài chính của Hàn Quốc, được thành lập vào năm 1997. Với ưu điểm giải ngân nhanh, bảo mật thông tin, hỗ trợ đa dạng phương thức thanh toán. Do đó, bạn sẽ yên tâm mua đồng hồ trả góp qua Mirae Asset.

Cách 1: Trả góp Online bằng thẻ tín dụng

Điều kiện: Áp dụng cho đơn hàng từ 3.000.000 VNĐ
Cách 2: Trả góp trực tiếp tại cửa hàng

► Điều kiện

Áp dụng cho đơn hàng từ 2.250.000 VNĐ
Đơn hàng dưới 15 triệu cần có CMND, Bằng lái xe
Đơn hàng trên 15 triệu cần có CMND, Bằng lái xe và Sổ hộ khẩu
► Hướng dẫn

Đến chi nhánh Đồng Hồ Hải Triều gần nhất, mua đồng hồ và thanh toán 10% giá trị đơn hàng. Sau đó nhân viên sẽ tư vấn và hỗ trợ về chính sách mua đồng hồ trả góp qua công ty tài chính Mirae Asset.
Giải ngân nhanh chóng ngay tại cửa hàng.',
'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('news')->insert([
                'user_id' => rand(1, 5),
                'category_id' => 1,
                'image' => 'images/news/news5.jpg',
                'title' => 'CÙNG MỘT SẢN PHẨM, ĐỒNG HỒ Ở S_Watch KHÁC GÌ SO VỚI NHỮNG NƠI KHÁC?'. $i,
                'summary' => 'Có rất nhiều nơi bán cũng một mẫu mã đồng hồ, vậy sản phẩm của S_Watch có gì khác so với những nơi khác mà nhiều người tin tưởng lựa chọn và trở thành khách hàng trung thành như vậy?',
                'content' => '1. LÀ HÀNG LOẠI 1, ĐƯỢC KỸ THUẬT VIÊN KIỂM TRA BẰNG TAY TRƯỚC KHI PHÂN PHỐI
                Do là đại lý lớn có uy tín lâu đời nên S_Watch có một “đặc quyền” mà hiếm có đại lý nào có được, đó là S_Watch được quyền kiểm tra đồng hồ bằng tay trước khi đồng ý nhận phân phối.
                
                S_Watch thiết lập một quy trình kiểm tra nghiêm ngặt: Sau khi nhận sản phẩm từ Nhà phân phối, tất cả các sản phẩm được đội ngũ kỹ thuật viên tại S_Watch kiểm tra kỹ lưỡng bằng tay, nếu có bất kỳ vết trầy xước hay dấu hiệu “xấu” nào ở vẻ ngoài thì sản phẩm sẽ bị vận chuyển ngược lại cho Nhà phân phối.
                Ở S_Watch, dù sản phẩm có giá rẻ hay đắt thì đều được kiểm tra như nhau, đảm bảo chất lượng xứng đáng với số tiền mà khách hàng bỏ ra, sẽ không có chuyện quảng cáo quá đà trong khi chất lượng sản phẩm không được đảm bảo như nhiều nơi bán khác.

Uy tín chính là yếu tố đầu tiên mà khách hàng nhắc đến mỗi khi nghĩ về hệ thống Đồng Hồ S_Watch. Tất cả sản phẩm tại S_Watch đều được cam kết chính hãng, có đầy đủ giấy chứng nhận uỷ quyền từ hãng, nếu phát hiện hàng giả thì sẽ đền gấp 10 lần.',
'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('news')->insert([
                'user_id' => rand(1, 5),
                'category_id' => 1,
                'image' => 'images/news/news6.jpg',
                'title' => 'ĐỒNG HỒ S_Watch KHÁC BIỆT GÌ SO VỚI ĐỐI THỦ?'. $i,
                'summary' => 'So với các hệ thống kinh doanh đồng hồ khác, S_Watch chưa bao giờ giảm giá mặt hàng mình bán nhưng vẫn đông đúc “kẻ ra người vào”. Liệu rằng nơi đây có sự khác biệt và điểm độc đáo nào khác? Hãy cùng tìm hiểu.',
                'content' => '1. SHOWROOM SANG TRỌNG CHUẨN QUỐC TẾ
                Bước đi khác biệt của S_Watch đầu tiên phải nói về hệ thống Showroom đạt chuẩn quốc tế. Thay vì giảm giá, S_Watch chọn cách đầu tư vào trải nghiệm khách hàng. 
                
                Chú trọng thiết kế cửa hàng là yếu tố giúp S_Watch thu hút nhiều khách hàng ghé đến. Xây dựng không gian mua sắm rộng lớn, xuất hiện nhiều nơi tại những vị trí đắc địa là cơ sở giúp người dùng dễ dàng tìm kiếm và lựa chọn.
                
                Đầu tư nội thất, thiết kế Showroom chuyên nghiệp giúp S_Watch ngày càng tiếp cận được nhiều khách hàng hơn. Tính tiện nghi và thẩm mỹ luôn là tiêu chí được đặt ra hàng đầu.
                2. TẤT CẢ SẢN PHẨM ĐỀU LÀ HÀNG LOẠI 1
Có thể sẽ có rất nhiều doanh nghiệp bán lẻ truyền thông rằng mình bán đồng hồ chính hãng. Thế nhưng, không phải hàng chính hãng nào cũng là sản phẩm tốt. Chúng có thể thay đổi vì thời gian tồn kho, ngoại hình và cách bảo quản.

Không như các cửa hàng khác, các mặt hàng cung cấp tại S_Watch đều trải qua quá trình kiểm duyệt kỹ lưỡng trước khi đến tay khách hàng. Tất cả đều được đảm bảo chất lượng và không có bất cứ mẫu mã “xấu” hay “trầy” nào được bày bán. Việc tận tâm trong cách phục vụ khiến S_Watch luôn được khách hàng và đối tác đánh giá cao.  
                3. CHÍNH SÁCH BẢO HÀNH, HẬU MÃI TỐT NHẤT THỊ TRƯỜNG
Nỗi lo về bảo dưỡng, sửa chữa đồng hồ luôn là yếu tố khiến khách hàng băn khoăn. Hiểu được nhu cầu đó, S_Watch đã chọn cách gia tăng chính sách hậu mãi để mang lại sự an tâm tuyệt đối cho khách hàng.

Không chỉ đảm bảo đầy đủ chế độ bảo hành mà S_Watch còn ra mắt các chính sách hậu mãi vượt trội khác. Có thể kể đến như:

» Chính sách bảo hành tăng thêm đến 5 năm

» Miễn phí thay pin trọn đời cho dòng máy pin

» 1 đổi 1 cho các mặt hàng lỗi từ nhà sản xuất

» Chính sách RED Guarantee đặc biệt cho khách hàng mua đồng hồ Thụy Sỹ',
'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);

            DB::table('news')->insert([
                'user_id' => rand(1, 5),
                'category_id' => 1,
                'image' => 'images/news/news5.jpg',
                'title' => 'CÙNG MỘT SẢN PHẨM, ĐỒNG HỒ Ở S_Watch KHÁC GÌ SO VỚI NHỮNG NƠI KHÁC?'. $i,
                'summary' => 'Có rất nhiều nơi bán cũng một mẫu mã đồng hồ, vậy sản phẩm của S_Watch có gì khác so với những nơi khác mà nhiều người tin tưởng lựa chọn và trở thành khách hàng trung thành như vậy?',
                'content' => '1. LÀ HÀNG LOẠI 1, ĐƯỢC KỸ THUẬT VIÊN KIỂM TRA BẰNG TAY TRƯỚC KHI PHÂN PHỐI
                Do là đại lý lớn có uy tín lâu đời nên S_Watch có một “đặc quyền” mà hiếm có đại lý nào có được, đó là S_Watch được quyền kiểm tra đồng hồ bằng tay trước khi đồng ý nhận phân phối.
                
                S_Watch thiết lập một quy trình kiểm tra nghiêm ngặt: Sau khi nhận sản phẩm từ Nhà phân phối, tất cả các sản phẩm được đội ngũ kỹ thuật viên tại S_Watch kiểm tra kỹ lưỡng bằng tay, nếu có bất kỳ vết trầy xước hay dấu hiệu “xấu” nào ở vẻ ngoài thì sản phẩm sẽ bị vận chuyển ngược lại cho Nhà phân phối.
                Ở S_Watch, dù sản phẩm có giá rẻ hay đắt thì đều được kiểm tra như nhau, đảm bảo chất lượng xứng đáng với số tiền mà khách hàng bỏ ra, sẽ không có chuyện quảng cáo quá đà trong khi chất lượng sản phẩm không được đảm bảo như nhiều nơi bán khác.

Uy tín chính là yếu tố đầu tiên mà khách hàng nhắc đến mỗi khi nghĩ về hệ thống Đồng Hồ S_Watch. Tất cả sản phẩm tại S_Watch đều được cam kết chính hãng, có đầy đủ giấy chứng nhận uỷ quyền từ hãng, nếu phát hiện hàng giả thì sẽ đền gấp 10 lần.',
'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
                    ]); 
					
                    DB::table('news')->insert([
                        'user_id' => rand(1, 5),
                        'category_id' => 1,
                        'image' => 'images/news/1.jpg',
                        'title' => 'TISSOT ĐÀO TẠO VÀ CẤP CHỨNG CHỈ CHO NHÂN VIÊN CHO S_Watch'. $i,
                        'summary' => 'Ngày 10/11/2022, tại khách sạn Novotel Saigon Centre, đội ngũ nhân viên S_Watch tham dự khóa đào tạo từ thương hiệu Tissot Thụy Sỹ.',
                        'content' => '1. LỊCH SỬ THƯƠNG HIỆU
                        Tissot là nhà sản xuất sang trọng, thành lập năm 1853 (hơn 160 năm kinh nghiệm). Trụ sở chính đặt tại thị trấn Le Locle (Thụy Sỹ), thương hiệu đang vận hành 16.000 điểm bán lẻ, tại hơn 150 quốc gia.
                        2. CÁC DÒNG SẢN PHẨM
                        Tại Việt Nam, Tissot phần lớn tập trung vào các dòng
                        
                        Tissot PRC
                        Tissot Everytime
                        Tissot PRX
                        Tissot Chemin Des Tourelles
                        Tissot Lovely Square
                        Tissot Carson
                        Tissot Couturier,…
                        Đây cũng là những sản phẩm được khách hàng săn đón, tất cả đang được bán lẻ ủy quyền tại chuỗi cửa hàng S_Watch Trong đó, hai bộ sưu tập mới nhất đang gây sốt là Tissot PRX và Tissot Lovely Square.',
        'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
                            ]); 

                            
            DB::table('news')->insert([
                'user_id' => rand(1, 5),
                'category_id' => 1,
                'image' => 'images/news/2.jpg',
                'title' => 'Giải đáp tại sao đồng hồ S_Watch không giảm giá?'. $i,
                'summary' => 'Nhiều khách hàng thắc mắc rằng, tại sao chuỗi hệ thống Đồng Hồ S_Watch không bao giờ bán giảm giá đồng hồ, trong khi những nơi khác có chỗ lại giảm đến 10-20%? Và dưới đây chính là lời giải thích chính thức của chúng tôi.',
                'content' => 'Để lý giải cho điều đó, trước tiên chúng ta cần hiểu rằng tại sao doanh nghiệp lại bán giảm giá?

                Thực tế, giảm giá chính là một chiến lược Marketing nhằm mục đích thu hút khách hàng lựa chọn sản phẩm hoặc dịch vụ của doanh nghiệp. Hiện nay, hầu hết các doanh nghiệp đều lựa chọn chiến lược này để tiếp cận và thu về số lượng lớn khách hàng đầu vào.
                
                Chắc chắn bất kỳ ai khi là người mua hàng đều sẽ bị thu hút bởi 2 chữ “Giảm giá”. Bởi vậy, không thể phủ nhận độ ảnh hưởng của chiến lược này đến kết quả doanh thu của doanh nghiệp. Tuy nhiên, đó chỉ là doanh thu ngắn hạn, bài toán còn nằm ở phía sau mà không phải ai cũng nhận ra.
                Với các doanh nghiệp thường xuyên giảm giá thì nhiều khả năng, họ chỉ đang tập trung thu thật nhiều số lượng khách hàng ở đầu vào và thường bỏ quên việc chăm sóc khách hàng ở đầu ra.

Tiếp cận nhiều khách hàng, bán được nhiều hàng là một chuyện, chăm sóc và giữ chân khách hàng, khiến họ quay trở lại mua lần nữa và trở thành khách hàng trung thành của doanh nghiệp lại là chuyện hoàn toàn khác!',
'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
                            ]); 
                    DB::table('news')->insert([
                        'user_id' => rand(1, 5),
                        'category_id' => 1,
                        'image' => 'images/news/3.jpg',
                        'title' => 'MUA ONLINE ĐỒNG HỒ CITIZEN, NHẬN QUÀ ĐỘC QUYỀN 1 TRIỆU'. $i,
                        'summary' => 'Từ ngày 01/10 cho đến khi hết quà, Đồng Hồ S_Watch x Citizen x Fujita ra mắt chương trình mua đồng hồ Citizen nam, tặng ngay ví da Fujita Nhật Bản cao cấp trị giá hơn 1 triệu (áp dụng khi mua tại cửa hàng và đặt giao Online miễn phí vận chuyển). Số lượng quà tặng giới hạn và có thể kết thúc sớm hơn dự kiến. Cùng tham khảo mua sắm và nhận quà khủng ngay hôm nay.',
                        'content' => 'CHƯƠNG TRÌNH MUA ĐỒNG HỒ CITIZEN, TẶNG VÍ DA CAO CẤP
                        Citizen được biết đến là thương hiệu đồng hồ Nhật Bản hàng đầu với lượng khách hàng lớn trong khi Fujita cũng là thương hiệu ví cao cấp được thiết kế theo phong cách Nhật Bản.
                        
                        Sự kết hợp giữa thương hiệu đồng hồ Nhật Bản và thương hiệu ví da cao cấp theo phong cách Nhật Bản sẽ là Combo hấp dẫn. Tất cả sẽ được miễn phí khi mua sắm tại hệ thống Đồng Hồ Hải Triều.
                        
                        Chương trình mua đồng hồ, tặng ví da:
                        
                        ● Thương hiệu áp dụng: Citizen – chỉ áp dụng đối với đồng hồ nam Citizen
                        
                        ● Khu vực áp dụng: Toàn quốc, áp dụng khi mua trực tiếp tại cửa hàng và đặt hàng Online. Riêng đặt hàng Online, quý khách sẽ được miễn phí vận chuyển, được xem hàng trước khi thanh toán.
                        
                        ● Thương hiệu quà tặng: Fujita – Thương hiệu giày da Việt Nam
                        
                        ● Thời gian áp dụng: từ 01/10/2021 và hiện tại đã kết thúc.
                        
                        ● Thông tin về quà tặng: Ví da sử dụng dòng da cao cấp nhập khẩu từ Ý, Pháp, Nhật,… sau đó gia công thủ công tại Việt Nam theo tiêu chuẩn của Nhật Bản.
                        
                        ● Giá trị quà tặng: Quà tặng ví da Fujita cao cấp Nhật Bản có trị giá trên thị trường là hơn 1 triệu và là phiên bản giới hạn được phối hợp giữa S_Watch x Fujita.
                        QUA TUỔI 30 – THỜI GIAN CỦA ĐÀN ÔNG LÀ GIỚI HẠN
                            Đây chính là thông điệp mà S_Watch muốn hướng tới dành cho đàn ông khi bước vào tuổi 30.

                            “Qua tuổi 30, đàn ông không còn nhiều thời gian, cơ hội để thử và sai. 

                            Mọi quyết định đều phải được lên kế hoạch một cách chính xác, bài bản. 

                            Qua hơn 100 năm, độ chính xác của Citizen đã trở thành người bạn thân thiết thiết của đàn ông ngoài 30”

                            Chính Citizen là người bạn đồng hành quen thuộc của người đàn ông tuổi 30. Nhân sự kiện này, S_Watch muốn mang đến một món quà nào đó ý nghĩa, thiết thực và giá trị để bạn yêu bản thân mình hơn, trân trọng từng khoảnh khắc.
                        5 LÝ DO NÊN MUA ĐỒNG HỒ CITIZEN NAM
                            Citizen là thương hiệu đồng hồ quá quen thuộc với nam giới và trở thành 1 trong 3 thương hiệu đồng hồ nam Nhật Bản bán chạy nhất tại thị trường Việt Nam.

                            Vậy, lý do gì Citizen được yêu thích đến vậy?',
        'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
                            ]);         
        }
    }

}