@extends('client/index')
@section('content')
    <section class="section home_1">
        <div class="swiper homeBannerSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner_item" style="background-image: url('{{asset('images/banner/home_banner_2.jpg')}}')">
                        <div class="home_banner_content">
                            <div class="banner_title">Web của Nguyên Khôi</div>
                            <div class="banner_description">Đơn giản, dễ dùng, tiết kiệm thời gian. Dễ dàng thống kê quản lý mặt hàng trang phục</div>
                            <a href="#" class="btn btn_primary">Xem sản phẩm</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner_item" style="background-image: url('{{asset('images/banner/home_banner.png')}}')">
                        <div class="home_banner_content">
                            <div class="banner_title">Web của Nguyên Khôi</div>
                            <div class="banner_description">Nguyên Khôi</div>
                            <a href="#" class="btn btn_primary">Xem sản phẩm</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner_item" style="background-image: url('{{asset('images/banner/home_banner_2.jpg')}}')">
                        <div class="home_banner_content">
                            <div class="banner_title">Web của Nguyên Khôi</div>
                            <div class="banner_description">Đơn giản, dễ dùng, tiết kiệm thời gian. Dễ dàng thống kê quản lý mặt hàng trang phục</div>
                            <a href="#" class="btn btn_primary">Xem sản phẩm</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner_item" style="background-image: url('{{asset('images/banner/home_banner.png')}}')">
                        <div class="home_banner_content">
                            <div class="banner_title">Web của Nguyên Khôi</div>
                            <div class="banner_description">Nguyên Khôi</div>
                            <a href="#" class="btn btn_primary">Xem sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="section home_2" style="background-image: url('{{asset('images/background/Rectangle-695.png')}}')">
        <div class="grid-container">
            <div class="section_heading text_center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                <div class="title_group">
                    <div class="bg_title">Products</div>
                    <div class="sec_title">Sản phẩm</div>
                </div>
                <div class="sec_des">
                    Mang đến những dòng sản phẩm phần mềm chuyên sâu cho ngành vàng bạc đá quý
                </div>
            </div>
            <div class="home_prod_wrap" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img_wrap">
                            <img src="images/products/prod_img.png" alt="">
                            <div class="home_prod_cont">
                                <p>Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao</p>
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.34 49.6479C38.8604 49.6479 49.8207 38.6875 49.8207 25.1672C49.8207 11.6469 38.8604 0.686523 25.34 0.686523C11.8197 0.686523 0.859375 11.6469 0.859375 25.1672C0.859375 38.6875 11.8197 49.6479 25.34 49.6479Z" stroke="white"></path>
                                    <line x1="16.2773" y1="24.6675" x2="34.4013" y2="24.6675" stroke="white" stroke-linecap="round"></line>
                                    <line x1="24.8398" y1="34.229" x2="24.8398" y2="16.105" stroke="white" stroke-linecap="round"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="home_prod_name">
                            Chỗ này là tên sản phẩm
                            Chỗ này là tên sản phẩm
                        </div>
                    </a>
                </div>
            </div>
            <div id="view_more_prod" class="btn_primary">
                Xem thêm
            </div>
        </div>
    </section>
    <section class="home_3">
        <div class="grid-container">
            <div class="section_heading text_center" data-aos="fade-up">
                <div class="title_group">
                    <div class="bg_title">Why to choose</div>
                    <div class="sec_title">Tại sao chọn chúng tôi</div>
                </div>
                <div class="sec_des">
                    Với nhiều năm kinh nghiệm chúng tôi tự tin rằng về dịch vụ cũng như sản phẩm của mình
                </div>
            </div>
            <div class="list_item">
                <div class="item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <div class="item_cont">
                        <div class="count">01</div>
                        <div class="item_title">Tiện lợi</div>
                        <div class="item_des">Giao diện đơn giản, thân thiện và thông minh. Nhân viên chỉ mất 15 phút làm quen để bán hàng.</div>
                    </div>
                    <div class="item_img">
                        <img src="images/background/image-5.png" alt="">
                    </div>
                </div>
                <div class="item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                    <div class="item_cont">
                        <div class="count">02</div>
                        <div class="item_title">Đội ngũ nhân viên</div>
                        <div class="item_des">Giao diện đơn giản, thân thiện và thông minh. Nhân viên chỉ mất 15 phút làm quen để bán hàng.</div>
                    </div>
                    <div class="item_img">
                        <img src="images/background/image-5.png" alt="">
                    </div>
                </div>
                <div class="item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">
                    <div class="item_cont">
                        <div class="count">02</div>
                        <div class="item_title">Sản phẩm mới nhất</div>
                        <div class="item_des">Giao diện đơn giản, thân thiện và thông minh. Nhân viên chỉ mất 15 phút làm quen để bán hàng.</div>
                    </div>
                    <div class="item_img">
                        <img src="images/background/image-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section home_4" style="background-image: url('{{asset('images/background/bg-1.png')}}')">
        <div class="grid-container">
            <div class="grid-50"  data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">
                <div class="content_wrap">
                    <div class="sec_title">TIVA CLOUD</div>
                    <div class="sec_sub_title">Cam kết thành công, cùng chung trách nhiệm</div>
                    <div class="sec_cont">
                        <p>Chúng tôi là công ty công nghệ cung cấp những giải pháp đơn giản với chi phí tiết kiệm, giúp khách hàng nâng cao hiệu quả kinh doanh.</p>
                        <p>Chúng tôi hướng tới tầm nhìn trở thành công ty cung cấp giải pháp công nghệ cho doanh nghiệp phổ biến tại Đông Nam Á.</p>
                    </div>
                    <a href="#" class="btn btn_primary">Tìm hiểu thêm</a>
                </div>
            </div>
            <div class="grid-50">
                <div class="list_bubble">
                    <div class="item_bubble" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                        <img src="images/icon/Frame-18806.png" alt="">
                    </div>
                    <div class="item_bubble" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                        <img src="images/icon/Frame-18807.png" alt="">
                    </div>
                    <div class="item_bubble" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <img src="images/icon/Frame-18808.png" alt="">
                    </div>
                    <div class="item_bubble" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                        <img src="images/icon/Frame-18809.png" alt="">
                    </div>
                    <div class="item_bubble" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900">
                        <img src="images/icon/Frame-18810.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section home_5">
        <div class="grid-container">
            <div class="section_heading text_center" data-aos="fade-up">
                <div class="title_group">
                    <div class="bg_title">News</div>
                    <div class="sec_title">Tin tức nổi bật</div>
                </div>
                <div class="sec_des">

                </div>
            </div>
            <div class="home_news_wrap">
                <div class="item">
                    <div class="img_wrap">
                        <img src="images/news/news_1.jpg" alt="">
                    </div>
                    <div class="item_cont">
                        <div class="title">Giá vàng SJC phiên sáng 7/9 giữ ổn định quanh ngưỡng 57,5 triệu đồng/lượng</div>
                        <div class="date">26/11/2022</div>
                        <div class="des">Giá vàng SJC trong nước phiên sáng 7/9 tiếp tục giữ ổn định trong khi đồng USD giao dịch tại một số ngân hàng thương mại lớn có xu hướng đi xuống.</div>
                    </div>
                </div>
                <div class="item">
                    <div class="img_wrap">
                        <img src="images/news/news_1.jpg" alt="">
                    </div>
                    <div class="item_cont">
                        <div class="title">Giá vàng SJC phiên sáng 7/9 giữ ổn định quanh ngưỡng 57,5 triệu đồng/lượng</div>
                        <div class="date">26/11/2022</div>
                        <div class="des">Giá vàng SJC trong nước phiên sáng 7/9 tiếp tục giữ ổn định trong khi đồng USD giao dịch tại một số ngân hàng thương mại lớn có xu hướng đi xuống.</div>
                    </div>
                </div>
                <div class="item">
                    <div class="img_wrap">
                        <img src="images/news/news_1.jpg" alt="">
                    </div>
                    <div class="item_cont">
                        <div class="title">Giá vàng SJC phiên sáng 7/9 giữ ổn định quanh ngưỡng 57,5 triệu đồng/lượng</div>
                        <div class="date">26/11/2022</div>
                        <div class="des">Giá vàng SJC trong nước phiên sáng 7/9 tiếp tục giữ ổn định trong khi đồng USD giao dịch tại một số ngân hàng thương mại lớn có xu hướng đi xuống.</div>
                    </div>
                </div>
                <div class="item">
                    <div class="img_wrap">
                        <img src="images/news/news_1.jpg" alt="">
                    </div>
                    <div class="item_cont">
                        <div class="title">Giá vàng SJC phiên sáng 7/9 giữ ổn định quanh ngưỡng 57,5 triệu đồng/lượng</div>
                        <div class="date">26/11/2022</div>
                        <div class="des">Giá vàng SJC trong nước phiên sáng 7/9 tiếp tục giữ ổn định trong khi đồng USD giao dịch tại một số ngân hàng thương mại lớn có xu hướng đi xuống.</div>
                    </div>
                </div>
                <div class="item">
                    <div class="img_wrap">
                        <img src="images/news/news_1.jpg" alt="">
                    </div>
                    <div class="item_cont">
                        <div class="title">Giá vàng SJC phiên sáng 7/9 giữ ổn định quanh ngưỡng 57,5 triệu đồng/lượng</div>
                        <div class="date">26/11/2022</div>
                        <div class="des">Giá vàng SJC trong nước phiên sáng 7/9 tiếp tục giữ ổn định trong khi đồng USD giao dịch tại một số ngân hàng thương mại lớn có xu hướng đi xuống.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section home_6">
        <div class="grid-container">
            <div class="section_heading text_center">
                <div class="title_group">
                    <div class="bg_title">Brands</div>
                    <div class="sec_title">Thương hiệu</div>
                </div>
                <div class="sec_des">
                    TivaCloud sẵn sàng đồng hành cùng Quý đối tác trên mọi miền đất nước
                </div>
            </div>
            <div class="swiper brandSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/logo/image-10.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/logo/image-10.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/logo/image-10.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/logo/image-10.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/logo/image-10.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/logo/image-10.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/logo/image-10.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/logo/image-10.png" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
@endsection
