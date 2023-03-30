@extends('layouts.guest')
@section('description'){{$page->description}}@endsection
@section('title'){{$page->title}}@endsection
@section('keywords'){{$page->keywords}}@endsection
@section('content')
<section class="shop_container grid-container">
    <div class="shop_aside grid-25">
        <div class="block_wrap cat_box">
            <h3 class="block_title">Danh mục sản phẩm</h3>
            <ul>
                @foreach($cats as $cat)
                    <li data-id="{{$cat->id}}">
                        <div class="check_box">
                            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.25 0.750488L6.75 11.25L1.5 6.00049" stroke="#F7941D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>
                            {{$cat->name}}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="block_wrap brands_box">
            <h3 class="block_title">Thương hiệu</h3>
            <ul>
                @foreach($brands as $brand)
                <li data-id="{{$brand->id}}">
                    <div class="check_box">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.25 0.750488L6.75 11.25L1.5 6.00049" stroke="#F7941D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span>
                        {{$brand->name}}
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="shop_main grid-75">
        <div class="shop_nav">
            <div class="prod_count">
                <strong>12</strong>
                <span>sản phẩm trong tổng số</span>
                <strong>{{ $products->total() }}</strong>
            </div>
            <div class="prod_soft">
                <span>Sắp xếp theo mặc định</span>
                <ul>
                    <li data-sort="created_at-desc">Sản phẩm mới nhất</li>
                    <li data-sort="created_at-asc">Sản phẩm cũ nhất</li>
                    <li data-sort="price-desc">Giá cao nhất</li>
                    <li data-sort="price-asc">Giá thấp nhất</li>
                    <li data-sort="name-asc">A - Z</li>
                    <li data-sort="name-desc">Z - A</li>
                </ul>
            </div>
            <div id="prod_view" class="prod_view">
                <div id="grid_icon" class="active">
                    <i class="fas fa-th"></i>
                </div>
                <div id="list_icon">
                    <i class="fas fa-list-ul"></i>
                </div>
            </div>
        </div>
        <div id="shop_wrap">
            <div class="shop_item_wrap grid">
                @foreach($products as $product)
                    {{-- Lấy thông tin sản phẩm--}}
                    <div class="item">
                        <div class="prod-popup" id="prod-{{$product->id}}">
                            <div class="bg_close"></div>
                            <div class="popup">
                                <div class="grid-container">
                                    <div class="grid-40">
                                        <img src="{{$product->images}}" alt="example-image">
                                    </div>
                                    <div class="grid-60">
                                        <div class="title_gr">
                                            <a href="#">Tên sản phẩm : {{$product->name}}</a>
                                        </div>
                                        @if( (isset($product->discount)) && ($product->discount > 0) )
                                            <div class="price_gr">
                                                <h3>{{number_format($product->price*(100 - $product->discount)/100, 0, ",", ".")}}
                                                    vnđ
                                                    <del>{{number_format($product->price, 0, ",", ".")}} vnđ</del>
                                                </h3>
                                                <p><span>Trạng thái: </span>Còn hàng</p>
                                            </div>
                                        @else
                                            <div class="price_gr">
                                                <h3>{{number_format($product->price*(100 - $product->discount)/100, 0, ",", ".")}}
                                                    vnđ </h3>
                                                <p><span>Trạng thái: </span>Còn hàng</p>
                                            </div>
                                        @endif
                                        <div class="popup_des">
                                            {{$product->description}}
                                        </div>
                                        <div class="popup_action">
                                            <a href="#" class="add_to_cart_btn add_cart"
                                               data-url="{{ route('addCart', ['id' => $product->id]) }}">
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
                            <img src="{{ asset($product->images) }}" alt="example-image">
                            <figcaption>
                                <div class="icon_wrap">
                                    <a title="Thêm vào giỏ hàng" href="#" class="add_to_cart_btn add_cart"
                                       data-url="{{ route('addCart', ['id' => $product->id]) }}">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                    <a title="Xem nhanh sản phẩm" class="showPopup" data-id="{{ $product->id}}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a title="Thêm vào yêu thích" href="#">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                            </figcaption>
                            @if( (isset($product->discount)) && ($product->discount > 0) )
                                <div class="badge sale">
                                    -{{$product->discount}}%
                                </div>
                            @endif
                        </figure>
                        <div class="prod_cont">
                            <div class="prod_name">
                                <a href="{{url('single-product/'.$product->slug)}}">{{$product->name}}</a>
                            </div>
                            <div class="prod_des">
                                {{ $product->description }}
                            </div>
                        </div>
                        <div class="prod_actions">
                            @if( (isset($product->discount)) && ($product->discount > 0) )
                                <div class="prod_price">
                        <span class="discount">
                            {{ number_format($price = ($product->price*(100 - $product->discount)/100), 0, ",", ".")}}
                            vnđ
                        </span>
                                    <del>
                                        {{ number_format($product->price, 0, ",", ".")}} vnđ
                                    </del>
                                </div>
                            @else
                                <div class="prod_price">
                        <span class="discount">
                            {{ number_format($product->price*(100 - $product->discount)/100, 0, ",", ".")}} vnđ
                        </span>
                                </div>
                            @endif

                            <div class="btn_wrap">
                                <a href="#" class="add_to_cart_btn add_cart"
                                   data-url="{{ route('addCart', ['id' => $product->id]) }}">
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
            </div>

            <div class="Page pagination m-auto">
                <?php
                $total = $products->total();
                $pages = ceil($total / $products->perPage());
                ?>
                <ul class="pagination">
                    <li class="prev page-item">
                        <a class="page-link" href="{{$products->previousPageUrl()}}">
                            <i class="zmdi zmdi-chevron-left"></i>
                        </a>
                    </li>
                    @for($i = 1; $i <= $pages; $i++) <li
                        class="@if($products->currentPage() == $i)current @endif page-item">
                        <a class="page-link" @if($products->currentPage() != $i)href="{{$products->url($i)}}" @endif>
                            {{$i}}
                        </a>
                    </li>

                    @endfor
                    <li class="next page-item">
                        <a class="page-link" href="{{$products->nextPageUrl()}}">
                            <i class="zmdi zmdi-chevron-right"></i>

                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
<input id="filter_input" type="hidden" data-cat="all" data-brand="all" data-url="{{route('productsFilter')}}" data-sort="created_at-desc">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    jQuery(document).delegate(".shop_aside .block_wrap li", "click", function(e){
        e.preventDefault();
        var id = jQuery(this).attr('data-id'),
            input = jQuery("#filter_input"),
            url = input.attr('data-url');
        if(jQuery(this).parents(".block_wrap").hasClass('brands_box')){
            input.attr('data-brand', id);
            jQuery(".shop_aside .block_wrap.brands_box li").removeClass('active');
        }
        else if(jQuery(this).parents(".block_wrap").hasClass('cat_box')){
            input.attr('data-cat', id);
            jQuery(".shop_aside .block_wrap.cat_box li").removeClass('active');
        }
        jQuery(this).addClass('active');

        var brand = input.attr('data-brand'),
            cat = input.attr('data-cat'),
            sort = input.attr('data-sort'),
            arr = sort.split('-'),
            orderby = arr[0],
            order = arr[1];
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#shop_wrap').empty().load(url, {brand: brand, pd_cat: cat, sort_by: orderby, sort: order});
    })
    jQuery(document).delegate(".prod_soft > ul > li", "click", function(e){
        e.preventDefault()
        var value = jQuery(this).attr('data-sort'),
            input = jQuery("#filter_input");
        input.attr('data-sort', value)
        var brand = input.attr('data-brand'),
            cat = input.attr('data-cat'),
            sort = input.attr('data-sort'),
            arr = sort.split('-'),
            orderby = arr[0],
            order = arr[1],
            url = input.attr('data-url');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#shop_wrap').empty().load(url, {brand: brand, pd_cat: cat, sort_by: orderby, sort: order});
    })
    function addcart(event){
        event.preventDefault();
        let urlcart = $(this).data('url');
        $.ajax({
            type:"GET",
            url:urlcart,
            dataType: 'json',
            success: function (data){
                Swal.fire({
                    title: 'Thêm vào giỏ hàng thành công !!',
                    text: "Bạn có muốn kiểm tra giỏ hàng không?",
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Có'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/show-cart";
                    }
                })

            },
            error: function (){

            }
        });
    }
    $(function(){
        $('.add_cart').on('click', addcart)
    });
    $(document).ready(function () {
        @if (Session::has('msg'))
        toastr.success('{{ Session::get('msg') }}');
        @elseif(Session::has('success'))
        toastr.error('{{ Session::get('success') }}');
        @endif
    });
</script>
@endsection
