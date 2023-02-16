@extends('client/index')
@section('content')
    <section class="shop_container grid-container">
        <div class="shop_aside grid-25">
            <div class="block_wrap">
                <h3 class="block_title">Danh mục sản phẩm</h3>
                <ul>
                    <li><a href="#">Tất cả sản phẩm</a></li>
                    <li><a href="#">Quần dài</a></li>
                    <li><a href="#">Áo thun</a></li>
                    <li><a href="#">Áo khoác</a></li>
                    <li><a href="#">Quần short</a></li>
                </ul>
            </div>
            <div class="block_wrap">
                <h3 class="block_title">Danh mục sản phẩm</h3>
                <ul>
                    <li><a href="#">Tất cả sản phẩm</a></li>
                    <li><a href="#">Quần dài</a></li>
                    <li><a href="#">Áo thun</a></li>
                    <li><a href="#">Áo khoác</a></li>
                    <li><a href="#">Quần short</a></li>
                </ul>
            </div>
            <div class="block_wrap">
                <h3 class="block_title">Danh mục sản phẩm</h3>
                <ul>
                    <li><a href="#">Tất cả sản phẩm</a></li>
                    <li><a href="#">Quần dài</a></li>
                    <li><a href="#">Áo thun</a></li>
                    <li><a href="#">Áo khoác</a></li>
                    <li><a href="#">Quần short</a></li>
                </ul>
            </div>
            <div class="block_wrap">
                <h3 class="block_title">Danh mục sản phẩm</h3>
                <ul>
                    <li><a href="#">Tất cả sản phẩm</a></li>
                    <li><a href="#">Quần dài</a></li>
                    <li><a href="#">Áo thun</a></li>
                    <li><a href="#">Áo khoác</a></li>
                    <li><a href="#">Quần short</a></li>
                </ul>
            </div>
        </div>
        <div class="shop_main grid-75">
            <div class="box_slider">
                <div class="swiper shopSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/banner/home_banner.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/banner/home_banner_2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/banner/home_banner_3.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-btn next">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="swiper-btn prev">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                </div>
            </div>
            <div class="shop_nav">
                <div class="prod_count">
                    <strong>999</strong>
                    <span>sản phẩm trong tổng số</span>
                    <strong>1000</strong>
                </div>
                <div class="prod_soft">
                    <span>Sắp xếp theo mặc định</span>
                    <ul>
                        <li value="">Sắp xếp theo mặc định</li>
                        <li value="">Sắp xếp theo tên</li>
                        <li value="">Sắp xếp theo giá giảm dần</li>
                        <li value="">Sắp xếp theo giá tăng dần</li>
                        <li value="">Sắp xếp theo đánh giá</li>
                        <li value="">Sắp xếp theo mới nhất</li>
                    </ul>
                </div>
                <div id="prod_view" class="prod_view">
                    <span>View:</span>
                    <div id="grid_icon" class="active">
                        <i class="fas fa-th"></i>
                    </div>
                    <div id="list_icon">
                        <i class="fas fa-list-ul"></i>
                    </div>
                </div>
            </div>
            <div class="shop_item_wrap grid">
            @foreach($products as $data)
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
                                        <a href="#">{{$data->name}}</a>
                                        <p>Loại sản phẩm: <a href="#">{{$data->brand}}</a></p>
                                    </div>
                                    <div class="price_gr">
                                        <h3>{{$data->price}}   <del>{{$data->discount}}</del></h3>
                                        <p><span>Trạng thái: </span>Còn hàng</p>
                                    </div>
                                    <div class="popup_des">
                                        {{$data->description}}
                                    </div>
                                    <div class="popup_action">
                                        <div class="qtty_box">
                                            <span class="qtty_minus">
                                                <i class="fas fa-minus"></i>
                                            </span>
                                            <input max="99" min="1" value="1" type="number" name="" >
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
                            <a href="{{url('/single-product')}}">{{$data->name}}</a>
                        </div>
                        <div class="prod_des">
                            Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                        </div>
                    </div>
                    <div class="prod_actions">
                        <div class="prod_price">
                            <span class="discount">
                                {{ $data->price}}
                            </span>
                            <del>
                            {{ $data->discount}}
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
            @endforeach
                <!-- <div class="item">
                    <div class="prod-popup" id="prod-2">
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
                                            <input max="99" min="1" value="1" type="number" name="" >
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

                        <div class="badge new">
                            new
                        </div>
                    </figure>
                    <div class="prod_cont">
                        <div class="prod_name">
                            <a href="{{url('/single-product')}}">Tên của một cái sản phẩm gì đó ở đây</a>
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
                                            <input max="99" min="1" value="1" type="number" name="" >
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
                            <a href="{{url('/single-product')}}">Tên của một cái sản phẩm gì đó ở đây</a>
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
                                            <input max="99" min="1" value="1" type="number" name="" >
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
                            <a href="{{url('/single-product')}}">Tên của một cái sản phẩm gì đó ở đây</a>
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
                                            <input max="99" min="1" value="1" type="number" name="" >
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
                            <a href="{{url('/single-product')}}">Tên của một cái sản phẩm gì đó ở đây</a>
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
                <div class="item">
                    <div class="prod-popup" id="prod-6">
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
                                            <input max="99" min="1" value="1" type="number" name="" >
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
                                <a title="Xem nhanh sản phẩm" class="showPopup" data-id="6">
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
                            <a href="{{url('/single-product')}}">Tên của một cái sản phẩm gì đó ở đây</a>
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
                <div class="item">
                    <div class="prod-popup" id="prod-7">
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
                                            <input max="99" min="1" value="1" type="number" name="" >
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
                                <a title="Xem nhanh sản phẩm" class="showPopup" data-id="7">
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
                            <a href="{{url('/single-product')}}">Tên của một cái sản phẩm gì đó ở đây</a>
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
                <div class="item">
                    <div class="prod-popup" id="prod-8">
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
                                            <input max="99" min="1" value="1" type="number" name="" >
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
                                <a title="Xem nhanh sản phẩm" class="showPopup" data-id="8">
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
                            <a href="{{url('/single-product')}}">Tên của một cái sản phẩm gì đó ở đây</a>
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
                <div class="item">
                    <div class="prod-popup" id="prod-9">
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
                                            <input max="99" min="1" value="1" type="number" name="" >
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
                                <a title="Xem nhanh sản phẩm" class="showPopup" data-id="9">
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
                            <a href="{{url('/single-product')}}">Tên của một cái sản phẩm gì đó ở đây</a>
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
                </div> -->
            </div>
        </div>
    </section>
@endsection
