<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">;
<style>
    body {font-family:'Montserrat';}

    *{
        font-family: 'Montserrat';
    }
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    section.cart_page{
        padding: 80px 0;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    table thead th{
        text-transform: uppercase;
        font-weight: 600;
        font-size: 15px;
    }
    table thead tr{
        height: 50px;
    }
    table tr{
        border-bottom: 1px solid #dedede;
        padding: 7px 10px;
    }
    .row{
        display: flex;
        grid-column-gap: 20px;
    }
    .row table{
        width: 70%;
    }
    .row .right_block{
        width: 30%;
        border: 1px solid #dedede;
        padding: 30px 20px 15px;
    }
    .text_center{
        text-align: center;
    }
    input.quatity{
        border: 1px solid #dedede !important;
        padding: 5px 10px;
    }
    td img{
        max-width: 80px;
    }
    a{
        color: #000
    }
    section.cart_page ul{
        flex-direction: column;
    }
    section.cart_page ul strong{
        display: inline-block;
        width: 130px;
        font-size: 16px;
    }
    section.cart_page ul li span{
        font-size: 14px;
    }
    section.cart_page ul li{
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    section.cart_page ul li:not(:last-child){
        border-bottom: 1px solid #dedede;

    }

    li.checkout a{
        padding: 7px 40px;
        background-color: #000000;
        border: 1px solid #000000;
        color: #FFF;
        font-weight: 700;
        text-transform: uppercase;
        cursor: pointer;
        -webkit-transition: 0.3s ease-in-out;
        -moz-transition: 0.3s ease-in-out;
        -ms-transition: 0.3s ease-in-out;
        -o-transition: 0.3s ease-in-out;
        transition: 0.3s ease-in-out;
        margin-top: 10px;
        display: block;
    }
    li.checkout a:hover{
        background-color: transparent;
        color: #000000
    }
</style>
<section class="section cart_page">

<div class="grid-container">
    <div class="cart" data-url="{{ route('deleteCart') }}">
        <div class="container">
            @if(!empty($cart))
            <div class="row">
                <table class="table update_cart_url" data-url="{{ route('updateCart') }}">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tạm tính</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i=1; $total = 0; @endphp
                        @foreach($cart as $id => $item)
                            @php $total += $item['price']*$item['quantity']; @endphp
                            <tr>
                                <td scope="row" class="text_center">{{ $i }}</td>
                                <td><img src="{{ $item['images'] }}"></td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ number_format($item['price'], 0 , ',','.') }} vnđ</td>
                                <td class="text_center">
                                    <input max="99" min="1" value="{{ $item['quantity'] }}" type="number" class="quatity text_center">
                                </td>
                                <td>{{ number_format($item['price']*$item['quantity'], 0 , ',','.') }} vnđ</td>
                                <td class="text_center">
                                    <a href="" class="cart_update" data-id="{{ $id }}"><i class="far fa-edit"></i></a>
                                    <a href="" class="cart_delete" data-id="{{ $id }}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
                
                <div class="right_block">
                    <ul>
                        <li>
                            <strong>TỔNG PHỤ:</strong>
                            <span>{{ number_format($total, 0, ',', '.') }} vnđ</span>
                        </li>
                        <li>
                            <strong>GIAO HÀNG:</strong>
                            <span>Miễn phí vận chuyển</span>
                        </li>
                        <li>
                            <form action="{{ route('apply') }}" method="post" >
                                @csrf
                                <strong>MÃ GIẢM GIÁ:</strong>
                                <input type="text" name="coupon" value="{{ Session::get('coupon_code')}}">
                                <div><button>APPLY</button></div>
                            </form>
                        </li>

                        <li>
                            <strong>TỔNG:</strong>
                            <?php
                                    if($total > Session::get('min_total')){
                                        if(($total * Session::get('discount') /100) > (Session::get('max_discount'))){
                                            $total =$total - Session::get('max_discount');
                                        }else{
                                            $total =$total - ($total * Session::get('discount') /100);
                                        }
                                    }else{
                                        $total = $total - 0;
                                    }
                            ?>
                            <h1>{{ number_format($total, 0, ',', '.') }}</h1>
                        </li>
                        <li class="checkout">
                            @if(Auth::user())
                                <a href="{{ route('order') }}">Tiến hành thanh toán</a>
                            @else
                                Vui lòng <a href="{{ route('login') }}">Đăng nhập</a> khi thanh toán
                            @endif
                        </li>
                    </ul>
                </div>

            </div>
            @else
                <h2 class="cart_empty">
                    Giỏ hàng rỗng
                </h2>
            @endif
        </div>
    </div>
</div>

</section>
