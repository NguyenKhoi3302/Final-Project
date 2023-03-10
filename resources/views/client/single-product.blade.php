@extends('layouts.guest')
@section('content')
        <section class="section single_product_1">
            <div class="grid-container">
                <div class="grid-40">
                    <div class="feature_img" id="feature_img">
                        <img src="{{asset('images/prod_img.png')}}" alt="">
{{--                        <img src="{{asset('images/prod_img.png')}}" alt="example-image">--}}
                    </div>
                    <div class="box_swiper product_gallery">
                        <div class="swiper singleProduct">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('images/prod_img.png')}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('images/prod_img.png')}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('images/prod_img.png')}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('images/prod_img.png')}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('images/prod_img.png')}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('images/prod_img.png')}}" alt="">
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
                                <li>T???n kho: <span>120</span></li>
                                <li>Lo???i s???n ph???m: <a href="">abc</a></li>
                                <li>Ng??y nh???p h??ng: 15/11/2022</li>
                            </ul>
                        </div>
                        <div class="single_product_price">
                            <h3>1.000.000??   <del>1.000.000??</del></h3>
                        </div>
                        <div class="description">
                            Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
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
                                Th??m v??o gi??? h??ng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="single_product_2">
            <ul>
                <li class="active" id="mota">M?? t???</li>
                <li id="tt" class="">Th??ng tin chi ti???t</li>
                <li id="cmt" class="">B??nh lu???n</li>
            </ul>
            <div class="grid-container">
                <div class="prod_des active" id="mota">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p><img decoding="async" loading="lazy" class="alignnone wp-image-159 size-full" src="https://royal.royaltiles.vn/wp-content/uploads/2022/11/Rectangle-492.jpg" alt="" width="793" height="339" srcset="https://royal.royaltiles.vn/wp-content/uploads/2022/11/Rectangle-492.jpg 793w, https://royal.royaltiles.vn/wp-content/uploads/2022/11/Rectangle-492-300x128.jpg 300w, https://royal.royaltiles.vn/wp-content/uploads/2022/11/Rectangle-492-768x328.jpg 768w" sizes="(max-width: 793px) 100vw, 793px"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="prod_info" id="tt">
                    <table>
                        <tbody><tr>
                            <td>K??ch th?????c: </td>
                            <td>600 x 1200 (mm)</td>
                        </tr>
                        <tr>
                            <td>Ph??n lo???i: </td>
                            <td>G???ch Ceramic</td>
                        </tr>
                        <tr>
                            <td>Kh??ng gian: </td>
                            <td>Nh?? b???p</td>
                        </tr>
                        <tr>
                            <td>?????c t??nh: </td>
                            <td>???? ph??? men Matt</td>
                        </tr>
                        <tr>
                            <td>???ng d???ng: </td>
                            <td>L??t s??n</td>
                        </tr>
                        <tr>
                            <td>Hoa v??n: </td>
                            <td>Hoa v??n</td>
                        </tr>
                        <tr>
                            <td>S??? vi??n / th??ng: </td>
                            <td>04 vi??n </td>
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
                    <div class="sec_title">S???n ph???m li??n quan</div>
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
                                                <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Ph???n m???m hi???n th??? gi?? v??ng tr??n tivi</a>
                                                    <p>Lo???i s???n ph???m: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000??   <del>1.000.000??</del></h3>
                                                    <p><span>Tr???ng th??i: </span>C??n h??ng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
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
                                                        Th??m v??o gi??? h??ng
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
                                    <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Th??m v??o gi??? h??ng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh s???n ph???m" class="showPopup" data-id="1">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Th??m v??o y??u th??ch" href="#">
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
                                        <a href="#">S???n ph???m demo  </a>
                                    </div>
                                    <div class="prod_des">
                                        Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000??
                                        </span>
                                        <del>
                                            1.200.000??
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Th??m v??o gi??? h??ng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Th??m v??o y??u th??ch</span>
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
                                                <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Ph???n m???m hi???n th??? gi?? v??ng tr??n tivi</a>
                                                    <p>Lo???i s???n ph???m: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000??   <del>1.000.000??</del></h3>
                                                    <p><span>Tr???ng th??i: </span>C??n h??ng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
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
                                                        Th??m v??o gi??? h??ng
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
                                    <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Th??m v??o gi??? h??ng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh s???n ph???m" class="showPopup" data-id="2">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Th??m v??o y??u th??ch" href="#">
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
                                        <a href="#">S???n ph???m demo  </a>
                                    </div>
                                    <div class="prod_des">
                                        Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000??
                                        </span>
                                        <del>
                                            1.200.000??
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Th??m v??o gi??? h??ng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Th??m v??o y??u th??ch</span>
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
                                                <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Ph???n m???m hi???n th??? gi?? v??ng tr??n tivi</a>
                                                    <p>Lo???i s???n ph???m: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000??   <del>1.000.000??</del></h3>
                                                    <p><span>Tr???ng th??i: </span>C??n h??ng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
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
                                                        Th??m v??o gi??? h??ng
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
                                    <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Th??m v??o gi??? h??ng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh s???n ph???m" class="showPopup" data-id="3">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Th??m v??o y??u th??ch" href="#">
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
                                        <a href="#">S???n ph???m demo  </a>
                                    </div>
                                    <div class="prod_des">
                                        Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000??
                                        </span>
                                        <del>
                                            1.200.000??
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Th??m v??o gi??? h??ng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Th??m v??o y??u th??ch</span>
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
                                                <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Ph???n m???m hi???n th??? gi?? v??ng tr??n tivi</a>
                                                    <p>Lo???i s???n ph???m: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000??   <del>1.000.000??</del></h3>
                                                    <p><span>Tr???ng th??i: </span>C??n h??ng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
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
                                                        Th??m v??o gi??? h??ng
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
                                    <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Th??m v??o gi??? h??ng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh s???n ph???m" class="showPopup" data-id="4">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Th??m v??o y??u th??ch" href="#">
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
                                        <a href="#">S???n ph???m demo  </a>
                                    </div>
                                    <div class="prod_des">
                                        Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000??
                                        </span>
                                        <del>
                                            1.200.000??
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Th??m v??o gi??? h??ng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Th??m v??o y??u th??ch</span>
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
                                                <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                            </div>
                                            <div class="grid-60">
                                                <div class="title_gr">
                                                    <a href="#">Ph???n m???m hi???n th??? gi?? v??ng tr??n tivi</a>
                                                    <p>Lo???i s???n ph???m: <a href="#">Brand 1</a></p>
                                                </div>
                                                <div class="price_gr">
                                                    <h3>1.000.000??   <del>1.000.000??</del></h3>
                                                    <p><span>Tr???ng th??i: </span>C??n h??ng</p>
                                                </div>
                                                <div class="popup_des">
                                                    Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
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
                                                        Th??m v??o gi??? h??ng
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
                                    <img src="{{asset('images/prod_img.png')}}" alt="example-image">
                                    <figcaption>
                                        <div class="icon_wrap">
                                            <a title="Th??m v??o gi??? h??ng" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            <a title="Xem nhanh s???n ph???m" class="showPopup" data-id="5">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a title="Th??m v??o y??u th??ch" href="#">
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
                                        <a href="#">S???n ph???m demo  </a>
                                    </div>
                                    <div class="prod_des">
                                        Gi???i ph??p qu???n l?? d??nh ri??ng cho ti???m c???m ?????, ????p ???ng m?? h??nh kinh doanh ????n l??? hay h??? th???ng chu???i c???a h??ng c???m ????? v???i c??c ch???c n??ng n??ng cao
                                    </div>
                                </div>
                                <div class="prod_actions">
                                    <div class="prod_price">
                                        <span class="discount">
                                        1.000.000??
                                        </span>
                                        <del>
                                            1.200.000??
                                        </del>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="" class="add_to_cart_btn">
                                            Th??m v??o gi??? h??ng
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <div class="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                            <span>Th??m v??o y??u th??ch</span>
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
                            alert ('th??m s???n ph???m th??nh c??ng !!');
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
