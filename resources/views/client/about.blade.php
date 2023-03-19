@extends('layouts.guest')
@section('description'){{$page->description}}@endsection
@section('title'){{$page->title}}@endsection
@section('keywords'){{$page->keywords}}@endsection
@section('content')
    <section class="section about_1" style="background-image: url('https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Component-4.jpg');">
        <div class="grid-container">
            <div class="grid-100">
                <div class="section_heading text_center">
                    <div class="title_group">
                        <div class="bg_title">
                            ABOUT US
                        </div>
                        <h1 class="sec_title">Chuỗi cửa hàng kinh doanh đồng hồ <br> S - Watch</h1>
                    </div>
                    <div class="sec_des">
                        Bất động sản Harbor Land được khởi đầu từ thành phố Hoa phượng đỏ Hải Phòng với các mặt bằng và căn hộ cao cấp, hiện nay Harbor Land mở rộng đầu tư, cho thuê và quản lý vận hành căn hộ cao cấp, biệt thự, shophouse, mặt bằng kinh doanh nhà hàng, khách sạn mini … trải dài ở nhiều tỉnh thành như Hải Phòng, Quảng Ninh, Phú Quốc, Bình Thuận, ...
                    </div>
                </div>
            </div>
            <div class="grid-100">
                <div class="img_list_wrap">
                    <div class="img_wrap">
                        <a href="/single-product/">
                            {!! App\Http\Controllers\Controller::get_img_attachment(40)!!}
                        </a>
                    </div>
                    <div class="img_wrap">
                        <a href="/single-product/">
                            {!! App\Http\Controllers\Controller::get_img_attachment(41)!!}
                        </a>
                    </div>
                    <div class="img_wrap">
                        <a href="/single-product/">
                            {!! App\Http\Controllers\Controller::get_img_attachment(42)!!}
                        </a>
                    </div>
                    <div class="img_wrap">
                        <a href="/single-product/">
                            {!! App\Http\Controllers\Controller::get_img_attachment(43)!!}
                        </a>
                    </div>
                    <div class="img_wrap">
                        <a href="/single-product/">
                            {!! App\Http\Controllers\Controller::get_img_attachment(44)!!}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about_2">
        <div class="grid-container">
            <div class="section_heading">
                <div class="title_group text_center">
                    <div class="bg_title">
                        OUR TARGET
                    </div>
                    <h2 class="sec_title">
                        <b>TẦM NHÌN & HƯỚNG HOẠT ĐỘNG</b>
                    </h2>
                </div>
            </div>

            <div class="content_wrap">
                <div class="item">
                    <div class="img_wrap">
                        <img width="705" height="365" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/03288310-4568-4fd7-9033-f5f1aaca59451-2.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/03288310-4568-4fd7-9033-f5f1aaca59451-2.jpg 705w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/03288310-4568-4fd7-9033-f5f1aaca59451-2-300x155.jpg 300w" sizes="(max-width: 705px) 100vw, 705px">                            </div>
                    <div class="cont_wrap">
                        <div class="sub_sec_title">
                            Phát triển bền vững
                        </div>
                        <h3 class="sec_title"><b>Tầm nhìn</b></h3>
                        <div class="sec_des">
                            Bằng khát vọng dẫn đầu và chiến lược phát triển bền vững, Harbor Land phấn đấu trở thành một trong các doanh nghiệp dẫn đầu trong lĩnh vực đầu tư, kinh doanh và quản lý bất động sản tại Việt Nam.                                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img_wrap">
                        <img width="705" height="365" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/03288310-4568-4fd7-9033-f5f1aaca59451-1.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/03288310-4568-4fd7-9033-f5f1aaca59451-1.jpg 705w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/03288310-4568-4fd7-9033-f5f1aaca59451-1-300x155.jpg 300w" sizes="(max-width: 705px) 100vw, 705px">                            </div>
                    <div class="cont_wrap">
                        <div class="sub_sec_title">
                            Tôn chỉ hoạt động                                    </div>
                        <h3 class="sec_title"><b>Giữ trọn chữ tín</b></h3>
                        <div class="sec_des">
                            Xây đắp niềm tin nơi quý khách hàng là điều tôn chỉ mà Harbor Land hướng tới. Chúng tôi cam kết nỗ lực hết mình để giúp khách hàng đạt được sự hài lòng cao nhất khi đến với Harbor Land.                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about_3" style="background-image: url('https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Component-6.jpg')">
        <div class="grid-container">
            <div class="section_heading">
                <div class="text_center title_group">
                    <div class="bg_title">
                        MISSION
                    </div>
                    <h2 class="sec_title text_white">
                        <b>SỨ MỆNH</b>
                    </h2>
                </div>
            </div>

            <div class="tabs_wrap">
                <img src="https://staging.canhcam.asia/harborland/wp-content/themes/canhcam/images/Ellipse_79.png" alt="">
                <ul class="tabs">
                    <li class="tab " data-id="0">
                        <img width="90" height="89" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Mask-group1.svg" class="" alt="" decoding="async" loading="lazy">                            </li>
                    <li class="tab active" data-id="1">
                        <img width="82" height="83" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Mask-group-2.svg" class="" alt="" decoding="async" loading="lazy">                            </li>
                    <li class="tab " data-id="2">
                        <img width="75" height="76" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Mask-group-1-1.svg" class="" alt="" decoding="async" loading="lazy">                            </li>
                </ul>
                <div class="tabs_content">
                    <div class="item " id="tab_0">
                        <div class="title text_white text_center">
                            Đối với khách hàng                                </div>
                        <div class="sec_des text_white text_center">
                            Cung cấp giải pháp, dịch vụ bất động sản toàn diện với chất lượng tốt nhất giúp khách hàng tiết kiệm thời gian và tối ưu chi phí.                                 </div>
                    </div>
                    <div class="item active" id="tab_1">
                        <div class="title text_white text_center">
                            Đối với khách hàng                                </div>
                        <div class="sec_des text_white text_center">
                            Cung cấp giải pháp, dịch vụ bất động sản toàn diện với chất lượng tốt nhất giúp khách hàng tiết kiệm thời gian và tối ưu chi phí.                                 </div>
                    </div>
                    <div class="item " id="tab_2">
                        <div class="title text_white text_center">
                            Đối với khách hàng                                </div>
                        <div class="sec_des text_white text_center">
                            Cung cấp giải pháp, dịch vụ bất động sản toàn diện với chất lượng tốt nhất giúp khách hàng tiết kiệm thời gian và tối ưu chi phí.                                 </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about_4">
        <div class="about_4_content">
            <div class="section_heading">
                <div class="title_group">
                    <div class="bg_title">
                        WHY
                    </div>
                    <h2 class="sec_title">
                        TẠI SAO CHỌN CHÚNG TÔI
                    </h2>
                    <div class="sec_des">
                        Với mục tiêu mang lại cho khách hàng những sự lựa chọn tốt nhất, Harbor Land luôn tìm kiếm, sở hữu và cung cấp các dự án, mặt bằng có địa thế vàng, đi cùng với uy tín và chất lượng dịch vụ. Không chỉ giúp khách hàng lựa chọn được mặt bằng phù hợp với nhu cầu để có một sự khởi đầu thịnh vượng, Harbor Land còn song hành trong quá trình khách hàng sinh sống hay phát triển kinh doanh. <br>
                    </div>
                </div>
            </div>

            <div class="swiper_wrap">
                <div class="swiper about_swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-e4e0d9dab0debf4c" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-980px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 306.667px; margin-right: 20px;" role="group" aria-label="1 / 3">
                            <div class="img_wrap">
                                <img width="338" height="510" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    01.
                                </div>
                                <h4 class="text_white">
                                    Dự án, mặt bằng có địa thế vàng                                        </h4>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 306.667px; margin-right: 20px;" role="group" aria-label="2 / 3">
                            <div class="img_wrap">
                                <img width="338" height="509" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    02.
                                </div>
                                <h4 class="text_white">
                                    Dịch vụ, uy tín và chất lượng                                        </h4>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="width: 306.667px; margin-right: 20px;" role="group" aria-label="3 / 3">
                            <div class="img_wrap">
                                <img width="338" height="509" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    03.
                                </div>
                                <h4 class="text_white">
                                    Harbor Land song hành cùng khách hàng                                        </h4>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 306.667px; margin-right: 20px;" role="group" aria-label="1 / 3">
                            <div class="img_wrap">
                                <img width="338" height="510" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    01.
                                </div>
                                <h4 class="text_white">
                                    Dự án, mặt bằng có địa thế vàng                                        </h4>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 306.667px; margin-right: 20px;" role="group" aria-label="2 / 3">
                            <div class="img_wrap">
                                <img width="338" height="509" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    02.
                                </div>
                                <h4 class="text_white">
                                    Dịch vụ, uy tín và chất lượng                                        </h4>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 306.667px; margin-right: 20px;" role="group" aria-label="3 / 3">
                            <div class="img_wrap">
                                <img width="338" height="509" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    03.
                                </div>
                                <h4 class="text_white">
                                    Harbor Land song hành cùng khách hàng                                        </h4>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 306.667px; margin-right: 20px;" role="group" aria-label="1 / 3">
                            <div class="img_wrap">
                                <img width="338" height="510" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-797-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    01.
                                </div>
                                <h4 class="text_white">
                                    Dự án, mặt bằng có địa thế vàng                                        </h4>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 306.667px; margin-right: 20px;" role="group" aria-label="2 / 3">
                            <div class="img_wrap">
                                <img width="338" height="509" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-798-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    02.
                                </div>
                                <h4 class="text_white">
                                    Dịch vụ, uy tín và chất lượng                                        </h4>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 306.667px; margin-right: 20px;">
                            <div class="img_wrap">
                                <img width="338" height="509" src="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799.jpg" class="" alt="" decoding="async" loading="lazy" srcset="https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799.jpg 338w, https://staging.canhcam.asia/harborland/wp-content/uploads/2023/03/Rectangle-799-199x300.jpg 199w" sizes="(max-width: 338px) 100vw, 338px">                                    </div>
                            <div class="title_wrap">
                                <div class="count text_white">
                                    03.
                                </div>
                                <h4 class="text_white">
                                    Harbor Land song hành cùng khách hàng                                        </h4>
                            </div>
                        </div></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="swiper_pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
            </div>
        </div>
    </section>
@endsection
