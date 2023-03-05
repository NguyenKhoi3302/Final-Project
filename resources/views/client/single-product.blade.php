@extends('client/index')
@section('content')
        <section class="section single_product_1">
            <div class="grid-container">
                <div class="grid-40">
                    <div class="feature_img" id="feature_img">
                        <img src="images/uploads/{{ $products->images}}" alt="example-image">
                    </div>
                    <div class="box_swiper product_gallery">
                        <div class="swiper singleProduct">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="images/products/prod_img.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/products/prod_img.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/products/1x1.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/products/prod_img.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/products/prod_img.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/products/prod_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="outside-btn prev">
                            <svg width="14" height="28" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.25 47.125L1.125 24L24.25 0.875" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="outside-btn next">
                            <svg width="14" height="28" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 0.875L23.875 24L0.75 47.125" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid-60">
                    <div class="single_product_name">
                        {{ $products->name }}
                    </div>
                    <div class="single_product_cont text_over">
                        <div class="nav_bar">
                            <ul>
                                <li>Tồn kho: <span>120</span></li>
                                <li>Loại sản phẩm: <a href="">abc</a></li>
                                <li>Ngày nhập hàng: 15/11/2022</li>
                            </ul>
                        </div>
                        <div class="single_product_price">
                            <h3>1.000.000đ   <del>1.000.000đ</del></h3>
                        </div>
                        <div class="description">
                            Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                        </div>
                        <div class="product_action">
                            <div class="qtty_box">
                                <span class="qtty_minus">
                                    <i class="fas fa-minus"></i>
                                </span>
                                <input max="99" min="1" value="1" type="number" name="">
                                <span class="qtty_plus">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                            <a href="#" class="add_to_cart_btn add_cart" data-url="{{ route('addCart', ['id' => $products->id]) }}"> 
                                Thêm vào giỏ hàng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="single_product_2">
            <ul>
                <li class="active" id="mota">Mô tả</li>
                <li id="tt" class="">Thông tin chi tiết</li>
                <li id="cmt" class="">Bình luận</li>
            </ul>
            <div class="grid-container">
                <div class="prod_des active" id="mota">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p><img decoding="async" loading="lazy" class="alignnone wp-image-159 size-full" src="https://royal.canhcam.asia/wp-content/uploads/2022/11/Rectangle-492.jpg" alt="" width="793" height="339" srcset="https://royal.canhcam.asia/wp-content/uploads/2022/11/Rectangle-492.jpg 793w, https://royal.canhcam.asia/wp-content/uploads/2022/11/Rectangle-492-300x128.jpg 300w, https://royal.canhcam.asia/wp-content/uploads/2022/11/Rectangle-492-768x328.jpg 768w" sizes="(max-width: 793px) 100vw, 793px"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="prod_info" id="tt">
                    <table>
                        <tbody><tr>
                            <td>Kích thước: </td>
                            <td>600 x 1200 (mm)</td>
                        </tr>
                        <tr>
                            <td>Phân loại: </td>
                            <td>Gạch Ceramic</td>
                        </tr>
                        <tr>
                            <td>Không gian: </td>
                            <td>Nhà bếp</td>
                        </tr>
                        <tr>
                            <td>Đặc tính: </td>
                            <td>Đá phủ men Matt</td>
                        </tr>
                        <tr>
                            <td>Ứng dụng: </td>
                            <td>Lát sàn</td>
                        </tr>
                        <tr>
                            <td>Hoa văn: </td>
                            <td>Hoa văn</td>
                        </tr>
                        <tr>
                            <td>Số viên / thùng: </td>
                            <td>04 viên </td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="prod_cmt" id="cmt">
                    asdfadsfadsfasdfsdaf
                </div>
            </div>
        </section>
        <section class="single_product_3">
            <div class="section_heading text_center">
                <div class="title_group">
                    <div class="bg_title">Related</div>
                    <div class="sec_title">Sản phẩm liên quan</div>
                </div>
            </div>
            <div class="box_swiper">
                <div class="swiper relatedProd">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide shop_item_wrap grid">
                            <div class="item">
                                <div class="prod-popup" id="prod-1">
                                    <div class="bg_close"></div>
                                    <div class="popup">
                                        <div class="grid-container">
                                            <div class="grid-40">
                                                <img src="images/products/prod_img.png" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Phần mềm hiển thị giá vàng trên tivi</a>
                                                    <p>Loại sản phẩm: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000đ   <del>1.000.000đ</del></h3>
                                                    <p><span>Trạng thái: </span>Còn hàng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                                </div>
                                                <div class="popup_action">
                                                    <div class="qtty_box">
                                                <span class="qtty_minus">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                        <input max="99" min="1" value="1" type="number" name="">
                                                        <span class="qtty_plus">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                    </div>
                                                    <a href="#" class="add_to_cart_btn">
                                                        Thêm vào giỏ hàng
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="close_btn">
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="imghvr-zoom-in">
                                    <img src="images/products/prod_img.png" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Thêm vào giỏ hàng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh sản phẩm" class="showPopup" data-id="1">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Thêm vào yêu thích" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </figcaption>

                                    <div class="badge sale">
                                        Sale
                                    </div>
                                </figure>
                                <div class="prod_cont">
                                    <div class="prod_name">
                                        <a href="#">Tên của một cái sản phẩm gì đó ở đây asdfasdf</a>
                                    </div>
                                    <div class="prod_des">
                                        Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000đ
                                        </span>
                                        <del>
                                            1.200.000đ
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Thêm vào giỏ hàng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Thêm vào yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shop_item_wrap grid">
                            <div class="item">
                                <div class="prod-popup" id="prod-2">
                                    <div class="bg_close"></div>
                                    <div class="popup">
                                        <div class="grid-container">
                                            <div class="grid-40">
                                                <img src="images/uploads/{{ $products->images}}" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Phần mềm hiển thị giá vàng trên tivi</a>
                                                    <p>Loại sản phẩm: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000đ   <del>1.000.000đ</del></h3>
                                                    <p><span>Trạng thái: </span>Còn hàng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                                </div>
                                                <div class="popup_action">
                                                    <div class="qtty_box">
                                                <span class="qtty_minus">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                        <input max="99" min="1" value="1" type="number" name="">
                                                        <span class="qtty_plus">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                    </div>
                                                    <a href="#" class="add_to_cart_btn">
                                                        Thêm vào giỏ hàng
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="close_btn">
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="imghvr-zoom-in">
                                    <img src="images/products/prod_img.png" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Thêm vào giỏ hàng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh sản phẩm" class="showPopup" data-id="2">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Thêm vào yêu thích" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </figcaption>

                                    <div class="badge sale">
                                        Sale
                                    </div>
                                </figure>
                                <div class="prod_cont">
                                    <div class="prod_name">
                                        <a href="#">Tên của một cái sản phẩm gì đó ở đây asdfasdf</a>
                                    </div>
                                    <div class="prod_des">
                                        Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000đ
                                        </span>
                                        <del>
                                            1.200.000đ
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Thêm vào giỏ hàng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Thêm vào yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shop_item_wrap grid">
                            <div class="item">
                                <div class="prod-popup" id="prod-3">
                                    <div class="bg_close"></div>
                                    <div class="popup">
                                        <div class="grid-container">
                                            <div class="grid-40">
                                                <img src="images/products/prod_img.png" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Phần mềm hiển thị giá vàng trên tivi</a>
                                                    <p>Loại sản phẩm: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000đ   <del>1.000.000đ</del></h3>
                                                    <p><span>Trạng thái: </span>Còn hàng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                                </div>
                                                <div class="popup_action">
                                                    <div class="qtty_box">
                                                <span class="qtty_minus">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                        <input max="99" min="1" value="1" type="number" name="">
                                                        <span class="qtty_plus">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                    </div>
                                                    <a href="#" class="add_to_cart_btn">
                                                        Thêm vào giỏ hàng
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="close_btn">
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="imghvr-zoom-in">
                                    <img src="images/products/prod_img.png" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Thêm vào giỏ hàng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh sản phẩm" class="showPopup" data-id="3">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Thêm vào yêu thích" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </figcaption>

                                    <div class="badge sale">
                                        Sale
                                    </div>
                                </figure>
                                <div class="prod_cont">
                                    <div class="prod_name">
                                        <a href="#">Tên của một cái sản phẩm gì đó ở đây asdfasdf</a>
                                    </div>
                                    <div class="prod_des">
                                        Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000đ
                                        </span>
                                        <del>
                                            1.200.000đ
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Thêm vào giỏ hàng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Thêm vào yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shop_item_wrap grid">
                            <div class="item">
                                <div class="prod-popup" id="prod-4">
                                    <div class="bg_close"></div>
                                    <div class="popup">
                                        <div class="grid-container">
                                            <div class="grid-40">
                                                <img src="images/products/prod_img.png" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Phần mềm hiển thị giá vàng trên tivi</a>
                                                    <p>Loại sản phẩm: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000đ   <del>1.000.000đ</del></h3>
                                                    <p><span>Trạng thái: </span>Còn hàng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                                </div>
                                                <div class="popup_action">
                                                    <div class="qtty_box">
                                                <span class="qtty_minus">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                        <input max="99" min="1" value="1" type="number" name="">
                                                        <span class="qtty_plus">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                    </div>
                                                    <a href="#" class="add_to_cart_btn">
                                                        Thêm vào giỏ hàng
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="close_btn">
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="imghvr-zoom-in">
                                    <img src="images/products/prod_img.png" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Thêm vào giỏ hàng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh sản phẩm" class="showPopup" data-id="4">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Thêm vào yêu thích" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </figcaption>

                                    <div class="badge sale">
                                        Sale
                                    </div>
                                </figure>
                                <div class="prod_cont">
                                    <div class="prod_name">
                                        <a href="#">Tên của một cái sản phẩm gì đó ở đây asdfasdf</a>
                                    </div>
                                    <div class="prod_des">
                                        Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000đ
                                        </span>
                                        <del>
                                            1.200.000đ
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Thêm vào giỏ hàng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Thêm vào yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shop_item_wrap grid">
                            <div class="item">
                                <div class="prod-popup" id="prod-5">
                                    <div class="bg_close"></div>
                                    <div class="popup">
                                        <div class="grid-container">
                                            <div class="grid-40">
                                                <img src="images/products/prod_img.png" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Phần mềm hiển thị giá vàng trên tivi</a>
                                                    <p>Loại sản phẩm: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000đ   <del>1.000.000đ</del></h3>
                                                    <p><span>Trạng thái: </span>Còn hàng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                                </div>
                                                <div class="popup_action">
                                                    <div class="qtty_box">
                                                <span class="qtty_minus">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                        <input max="99" min="1" value="1" type="number" name="">
                                                        <span class="qtty_plus">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                    </div>
                                                    <a href="#" class="add_to_cart_btn">
                                                        Thêm vào giỏ hàng
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="close_btn">
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="imghvr-zoom-in">
                                    <img src="images/products/prod_img.png" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Thêm vào giỏ hàng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh sản phẩm" class="showPopup" data-id="5">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Thêm vào yêu thích" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </figcaption>

                                    <div class="badge sale">
                                        Sale
                                    </div>
                                </figure>
                                <div class="prod_cont">
                                    <div class="prod_name">
                                        <a href="#">Tên của một cái sản phẩm gì đó ở đây asdfasdf</a>
                                    </div>
                                    <div class="prod_des">
                                        Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000đ
                                        </span>
                                        <del>
                                            1.200.000đ
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Thêm vào giỏ hàng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Thêm vào yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outside-btn prev">
                    <svg width="28" height="46" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.25 47.125L1.125 24L24.25 0.875" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="outside-btn next">
                    <svg width="28" height="46" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.75 0.875L23.875 24L0.75 47.125" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
        </section>
        <script>
            function addcart(event){
                event.preventDefault();
                let urlcart = $(this).data('url');
                $.ajax({
                    type:"GET",
                    url:urlcart,
                    dataType: 'json',
                    success: function (data){
                        if(data.code === 200){
                            alert ('thêm sản phẩm thành công !!');
                        }
                    },
                    error: function (){
    
                    }
                });
                // alert('123')
            }
            $(function(){
                $('.add_cart').on('click', addcart)
            });
        </script>
@endsection
