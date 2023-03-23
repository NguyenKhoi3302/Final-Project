@extends('layouts.guest')
@section('content')
{{--    @foreach($news_list as $item)--}}
{{--        {{$item->title}}--}}
{{--    @endforeach--}}
{{--    @foreach($pd_list as $item)--}}
{{--        {{$item->name}}--}}
{{--    @endforeach--}}
{{--@endsection--}}
<section class="shop_container grid-container">
  <div class="shop_main">
      <h1 class="sec_title text_center">Kết quả tìm kiếm cho: @php echo $_GET['q'] @endphp</h1>
    <div class="shop_item_wrap grid">
      @foreach($products as $product)
      <div class="item" style="width: 25%">
        <div class="prod-popup" id="prod-{{$product->id}}">
          <div class="bg_close"></div>
          <div class="popup">
            <div class="grid-container">
              <div class="grid-40">
                <img src="{{$product->images}}" alt="example-image">
              </div>
              <div class="grid-60">
                <div class="title_gr">
                  <a href="#">{{$product->name}}</a>
                  <p>Loại sản phẩm: <a href="#">{{$product->brand_id}}</a></p>
                </div>
                <div class="price_gr">
                  <h3>{{number_format($product->price, 0, ",", ".")}} vnđ
                    <del>{{number_format($product->price*(100 - $product->discount)/100, 0, ",",
                      ".")}} vnđ</del>
                  </h3>
                  <p><span>Trạng thái: </span>Còn hàng</p>
                </div>
                <div class="popup_des">
                  {{$product->description}}
                </div>
                <div class="popup_action">
                  <div class="qtty_box">
                    <span class="qtty_minus">
                      <i class="fas fa-minus"></i>
                    </span>
                    <input max="99" min="1" value="1" type="number" name="quantity">
                    <span class="qtty_plus">
                      <i class="fas fa-plus"></i>
                    </span>
                  </div>
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

          <div class="badge sale">
            Sale
          </div>
        </figure>
        <div class="prod_cont">
          <div class="prod_name">
            <a href="{{url('single-product/'.$product->id)}}">{{$product->name}}</a>
          </div>
          <div class="prod_des">
            {{ $product->description }}
          </div>
        </div>
        <div class="prod_actions">
          <div class="prod_price">
            <span class="discount">
              {{ number_format($product->price, 0, ",", ".")}} vnđ
            </span>
            <del>
              {{ number_format($product->price*(100 - $product->discount)/100, 0, ",", ".")}} vnđ
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
        @for($i = 1; $i <= $pages; $i++) <li class="@if($products->currentPage() == $i)current @endif page-item">
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
        }
        $(function(){
            $('.add_cart').on('click', addcart)
        });
</script>
@endsection
