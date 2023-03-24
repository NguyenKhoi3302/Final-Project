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
                <img src="{{ asset('/images/prod_img.png') }}" alt="example-image">
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

@if($products->total() > 12)
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
@endif
