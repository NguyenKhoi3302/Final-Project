@extends('layouts.guest')
@section('content')
<section class="section single_product_1">
    <div class="grid-container">
        <div class="grid-40">
            <div class="feature_img" id="feature_img">
                <img src="{{asset('images/prod_img.png')}}" alt="">
                {{-- <img src="{{asset('images/prod_img.png')}}" alt="example-image">--}}
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
                        <path d="M24.25 47.125L1.125 24L24.25 0.875" stroke="#666666" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="outside-btn next">
                    <svg width="14" height="28" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.75 0.875L23.875 24L0.75 47.125" stroke="#666666" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <li>Loại sản phẩm: <a href="">@foreach($brands as $data){{ $data->name }} @endforeach</a></li>
                    </ul>
                </div>
                <div class="single_product_price">
                    @if( (isset($products->discount)) && ($products->discount > 0) )
                    <div class="prod_price">
                        <h3 class="discount">
                            {{ number_format($price = ($products->price*(100 - $products->discount)/100), 0, ",", ".")}}
                            vnđ
                        </h3>
                        <del>
                            {{ number_format( $price = $products->price, 0, ",", ".")}} vnđ
                        </del>
                    </div>
                    @else
                    <div class="prod_price">
                        <h3 class="discount">
                            {{ number_format($products->price*(100 - $products->discount)/100, 0, ",", ".")}} vnđ
                        </h3>
                    </div>
                    @endif
                </div>
                <div class="description">
                    {{ $products->description}}
                </div>

                <div class="product_action">
                    {{-- @livewire('option-cart-component', ['products' => $products]) --}}
                    @foreach($products->productDetails as $productDetail)
                    <div class="qtty_box">
                        <label for="">{{$productDetail->color}}</label>
                        <input type="checkbox" name="color" value="{{$productDetail->color}}">
                    </div>
                    @endforeach
                    <select name="size" id="">
                        @foreach($products->productDetails as $productDetail)
                        <option value="{{$productDetail->size}}">{{$productDetail->size}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="product_action">
                    <div class="qtty_box">
                        <span class="qtty_minus">
                            <i class="fas fa-minus"></i>
                        </span>
                        <input max="99" min="1" value="1" type="number" name="qty">
                        <span class="qtty_plus">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>

                    <a href="#" class="add_to_cart_btn add_cart"
                        data-url="{{ route('addCart', ['id' => $products->id]) }}">
                        Thêm vào giỏ hàng
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="single_product_2 section">
    <ul>
        <li class="active" id="mota">Mô tả</li>
        <li id="tt" class="">Thông tin chi tiết</li>
        <li id="cmt" class="">Bình luận</li>
    </ul>
    <div class="grid-container">
        <div class="prod_des active" id="mota">
            {{ $products->contents }}
        </div>
        <div class="prod_info" id="tt">
            <table>
                <tbody>
                    @foreach($productsDetail as $data)
                    <tr>
                        <td>Màu sắc: </td>
                        <td>{{$data->color}}</td>
                    </tr>
                    <tr>
                        <td>Kích thuóc: </td>
                        <td>{{$data->size}}</td>
                    </tr>
                    {{-- <tr>
                        <td>Giới: </td>
                        <td>{{$data->sex}}</td>
                    </tr> --}}
                    <tr>
                        <td>Loại giây: </td>
                        <td>{{$data->color}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>Thương hiệu: </td>
                        <td>@foreach($brands as $data){{ $data->name }} @endforeach</td>
                    </tr>
                    <tr>
                        <td>Danh mục: </td>
                        <td>@foreach($cats as $data){{ $data->name }} @endforeach</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="prod_cmt" id="cmt">
            <section>
                @livewire('product-comment-component',['product_id' => (int)$products->id])
            </section>
        </div>
    </div>
</section>
<section class="single_product_3 section">
    <div class="section_heading text_center">
        <div class="title_group">
            <div class="bg_title">Related</div>
            <div class="sec_title">Sản phẩm liên quan</div>
        </div>
    </div>
    <div class="box_swiper">
        <div class="swiper relatedProd">
            <div class="swiper-wrapper">
                @foreach($productLimit as $data)
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
                                            <a href="#">Phần mềm hiển thị giá vàng trên tivi</a>
                                            <p>Loại sản phẩm: <a href="#">Brand 1</a></p>
                                        </div>
                                        <div class="price_gr">
                                            <h3>1.000.000đ <del>1.000.000đ</del></h3>
                                            <p><span>Trạng thái: </span>Còn hàng</p>
                                        </div>
                                        <div class="popup_des">
                                            Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn
                                            lẻ hay hệ thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
                                        </div>
                                        <div class="popup_action">
                                            <div class="qtty_box">
                                                <span class="qtty_minus">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                <input max="99" min="1" value="1" type="number" name="qty">
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
                            <img src="{{asset('images/prod_img.png')}}" alt="example-image">
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
                                <a href="#">Sản phẩm demo </a>
                            </div>
                            <div class="prod_des">
                                Giải pháp quản lý dành riêng cho tiệm cầm đồ, đáp ứng mô hình kinh doanh đơn lẻ hay hệ
                                thống chuỗi cửa hàng cầm đồ với các chức năng nâng cao
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
                @endforeach
            </div>
        </div>
        <div class="outside-btn prev">
            <svg width="28" height="46" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.25 47.125L1.125 24L24.25 0.875" stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </div>
        <div class="outside-btn next">
            <svg width="28" height="46" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.75 0.875L23.875 24L0.75 47.125" stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
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
    $(function () {
        $(".add_cart").on("click", function (e) {
            e.preventDefault();
            const url = $(this).data("url");
            const size = $('select[name="size"]').val();
            const color = $('input[name="color"]').val();
            const qty = $('input[name="qty"]').val();
            if (size && color) {
                $.ajax({
                    method: "GET",
                    url: url,
                    dataType: "json",
                    data: {
                        size: size,
                        qty: qty,
                        color: color.toLowerCase(),
                    },
                    success: function (data) {
                        if (data.code === 200) {
                            alert("thêm sản phẩm thành công !!");
                        }
                    },
                });
            } else {
                alert("Bạn chưa chọn đủ thuộc tính sản phẩm");
            }
        });
    });

</script>
@endsection