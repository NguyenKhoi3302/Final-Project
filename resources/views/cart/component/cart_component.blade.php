<style>
    body {
        font-family: 'Montserrat';
    }

    * {
        font-family: 'Montserrat';
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
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

    section.cart_page {
        padding: 60px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table thead th {
        text-transform: uppercase;
        font-weight: 600;
        font-size: 15px;
    }

    table thead tr {
        height: 50px;
    }

    table tr {
        border-bottom: 1px solid #dedede;
        padding: 7px 10px;
    }

    .row {
        display: flex;
        grid-column-gap: 20px;
    }

    .row table {
        width: 70%;
    }

    .row .right_block {
        width: 30%;
        border: 1px solid #dedede;
        padding: 30px 20px 15px;
    }

    .text_center {
        text-align: center;
    }

    input.quatity {
        border: 1px solid #dedede !important;
        padding: 5px 10px;
    }

    td img {
        max-width: 80px;
    }

    a {
        color: #000
    }

    section.cart_page ul {
        flex-direction: column;
    }

    section.cart_page ul strong {
        display: inline-block;
        width: 130px;
        font-size: 16px;
    }

    section.cart_page ul li span {
        font-size: 14px;
    }

    section.cart_page ul li {
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    section.cart_page ul li:not(:last-child) {
        border-bottom: 1px solid #dedede;

    }

    li.checkout a {
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

    li.checkout a:hover {
        background-color: transparent;
        color: #000000
    }
</style>
<section class="section cart_page">
    <div class="grid-container">
        <div class="cart" data-url="{{ route('deleteCart') }}">
            <h1 class="text_center sec_title">Giỏ hàng của bạn</h1>
            <div class="container">
                @if(!empty($cart))
                    <div class="cart_wrap">
                        <div class="left_col">
                            @php $i=1; $total = 0; @endphp
                            @foreach($cart as $id => $item)
                                @php $total += $item['price']*$item['quantity']; @endphp
                                <div class="cart_item">
                                    <div class="pd_info">
                                        <div class="img_wrap">
                                            <a href="#">
                                                {{--                                            <img src="{{ $item['images'] }}">--}}
                                                <img src="{{asset('images/image-removebg-preview.png')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="name_group">
                                            <h3 class="pd_name">
                                                {{ $item['name'] }}
                                            </h3>
                                            <div class="pd_price">
                                                {{ number_format($item['price'], 0 , ',','.') }}đ
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="quantity_btn">
                                            <div class="minus quant">
                                                <i class="fas fa-minus"></i>
                                            </div>
                                            <div class="quantity">
                                                <input max="99" min="1" value="{{ $item['quantity'] }}" type="number" class="quatity text_center">
                                            </div>
                                            <div class="plus quant">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                        <div class="cart_action">
                                            <a href="" class="cart_update" data-id="{{ $id }}"><i class="far fa-edit"></i></a>
                                            <a href="" class="cart_delete" data-id="{{ $id }}"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="right_col">
                            <div class="coupon_apply">
                                <div class="title">
                                    <svg width="35" height="35" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_778_19750)">
                                            <path d="M0 14.0108C0.0449346 13.8086 0.0703235 13.5981 0.138399 13.4042C0.224 13.1584 0.343077 12.9241 0.450246 12.6853C0.466855 12.6562 0.488451 12.6302 0.514052 12.6085C3.01272 10.1188 5.51228 7.63009 8.01275 5.14236C8.36256 4.79527 8.72608 4.45738 9.11364 4.15498C9.48667 3.86134 9.9483 3.70293 10.423 3.70567C11.8517 3.70207 13.2807 3.69061 14.7094 3.68612C14.8008 3.68612 14.8305 3.6531 14.848 3.57109C14.9915 2.90363 15.2371 2.27459 15.6105 1.7035C16.0439 1.04076 16.5847 0.479331 17.3423 0.198282C18.4805 -0.224751 19.4904 0.0470891 20.3628 0.857885C21.1137 1.55568 21.5639 2.4332 21.8007 3.4217C22.1481 4.8739 22.0479 6.29509 21.4496 7.66776C21.0604 8.56191 20.4745 9.2925 19.596 9.75709C19.5061 9.8054 19.4102 9.84696 19.2952 9.9011C19.283 9.7863 19.2673 9.69531 19.2651 9.60388C19.26 9.39839 19.2592 9.19275 19.2628 8.98696C19.2637 8.96809 19.2687 8.94963 19.2774 8.93284C19.2861 8.91606 19.2983 8.90133 19.3131 8.88968C19.8523 8.57516 20.2285 8.11371 20.5138 7.57296C20.9604 6.72621 21.1269 5.81544 21.1011 4.86491C21.0757 3.93347 20.8596 3.05281 20.3792 2.2474C20.1249 1.82055 19.7978 1.45975 19.3704 1.19824C18.6384 0.750046 17.8328 0.79071 17.148 1.30788C16.5613 1.7509 16.1971 2.3503 15.9309 3.02203C15.7132 3.57155 15.615 4.14241 15.6002 4.72944C15.582 5.45105 15.5681 6.17265 15.5552 6.89448C15.5499 7.18969 15.2317 7.39682 14.9635 7.26607C14.8024 7.18766 14.6867 7.08073 14.6954 6.86168C14.7105 6.48111 14.6914 6.09919 14.6844 5.71794C14.6844 5.67301 14.6682 5.62606 14.6548 5.55574C14.5525 5.6137 14.4656 5.65526 14.3867 5.70895C13.9864 5.98102 13.7801 6.34047 13.7684 6.84483C13.7556 7.44108 14.0369 7.82906 14.5177 8.10899C14.626 8.1719 14.7626 8.19189 14.8893 8.2157C14.976 8.2321 15.0691 8.21571 15.1589 8.22334C15.6847 8.26311 16.0338 7.98566 16.3144 7.58419C16.4369 7.41016 16.5017 7.20209 16.4998 6.98929C16.5103 6.14794 16.5391 5.30682 16.5685 4.46614C16.575 4.28035 16.6065 4.09455 16.6382 3.91078C16.6606 3.78295 16.6997 3.7643 16.8179 3.81328C17.5411 4.1132 18.0442 4.62205 18.2462 5.38747C18.3059 5.6146 18.3077 5.86172 18.3077 6.09964C18.3077 7.91384 18.3038 9.72789 18.2958 11.5418C18.294 12.1484 18.0806 12.6876 17.6775 13.1189C16.8404 14.0151 15.9749 14.8854 15.1102 15.7555C13.2277 17.65 11.3412 19.5403 9.45065 21.4266C9.37572 21.4986 9.29055 21.5592 9.1979 21.6063C8.83595 21.7979 8.4585 21.9471 8.04555 21.986C8.03461 21.989 8.02423 21.9937 8.01477 21.9999H7.52049C7.48431 21.992 7.44859 21.9828 7.41219 21.9774C6.95948 21.9006 6.53597 21.7595 6.19559 21.4322C5.8069 21.0597 5.40586 20.7 5.02459 20.3201C3.6072 18.9082 2.19348 17.493 0.783435 16.0745C0.49136 15.7825 0.246241 15.461 0.133904 15.057C0.0793088 14.8605 0.0440366 14.6585 0.000674678 14.459L0 14.0108ZM6.72784 14.6142C6.66852 14.6708 6.60944 14.7225 6.55619 14.7794C6.44655 14.8964 6.38319 15.0348 6.40543 15.1972C6.416 15.2743 6.44583 15.3474 6.49215 15.4099C6.53847 15.4723 6.59979 15.5221 6.67045 15.5546C6.7411 15.5871 6.81881 15.6012 6.89639 15.5958C6.97396 15.5903 7.0489 15.5653 7.11428 15.5232C7.21875 15.4558 7.30525 15.3603 7.40141 15.2761C7.48387 15.3255 7.56812 15.374 7.65035 15.4257C7.91547 15.5972 8.22165 15.6946 8.53713 15.7079C8.9065 15.7222 9.27676 15.7506 9.61399 15.5383C10.1622 15.1938 10.4678 14.7209 10.4116 14.0571C10.3839 13.7619 10.2958 13.4756 10.1528 13.216C9.95662 12.8513 9.73734 12.4993 9.52704 12.1423C9.36977 11.8745 9.21924 11.6031 9.16757 11.2913C9.1069 10.9318 9.34573 10.6018 9.69397 10.5827C9.83799 10.5749 9.98942 10.5782 10.1278 10.6142C10.7679 10.7806 11.1591 11.2187 11.3779 11.8213C11.4725 12.0814 11.4354 12.3443 11.3143 12.5939C11.2721 12.6813 11.2305 12.7693 11.1968 12.8601C11.1784 12.9047 11.1726 12.9535 11.18 13.0012C11.2211 13.1796 11.324 13.3123 11.4988 13.3779C11.6684 13.4415 11.8311 13.4152 11.9542 13.2847C12.0526 13.1805 12.1483 13.0618 12.2054 12.932C12.4889 12.2897 12.4024 11.664 12.0879 11.0565C12.0351 10.9543 11.9717 10.8577 11.9099 10.753C11.9515 10.7144 11.9973 10.6856 12.0254 10.6432C12.0915 10.5456 12.1739 10.4495 12.2051 10.3401C12.2629 10.1334 12.1661 9.96715 11.9996 9.84583C11.8407 9.72968 11.6731 9.74968 11.5179 9.85302C11.4163 9.92042 11.3271 10.0067 11.2483 10.0712C10.9991 9.95727 10.7652 9.83011 10.5174 9.74137C10.0186 9.56164 9.51401 9.5558 9.0413 9.81798C8.54859 10.0916 8.23248 10.4895 8.22641 11.0898C8.22214 11.5418 8.34886 11.9536 8.56701 12.3391C8.749 12.6608 8.95166 12.9706 9.14173 13.2878C9.28192 13.5224 9.40819 13.7637 9.46211 14.0357C9.51963 14.3258 9.41718 14.5891 9.15835 14.705C9.01127 14.7667 8.8517 14.7929 8.69261 14.7814C8.2127 14.7495 7.85502 14.4801 7.5661 14.1202C7.19808 13.6617 7.06305 13.1656 7.39265 12.6213C7.39849 12.6118 7.40276 12.6013 7.4077 12.5914C7.48319 12.4384 7.46297 12.2937 7.36681 12.158C7.19516 11.9161 6.89185 11.8808 6.67639 12.0846C6.42318 12.3241 6.30478 12.6332 6.26456 12.9708C6.2039 13.4797 6.33444 13.9486 6.58899 14.3862C6.63078 14.4608 6.67706 14.5325 6.72784 14.6142Z" fill="#F7941D"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_778_19750">
                                                <rect width="22" height="22" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Mã khuyến mãi</span>
                                </div>
                                <form action="{{ route('apply') }}" method="post">
                                    @csrf
                                    <input placeholder="Nhập mã khuyến mãi" type="text" name="coupon" value="{{ Session::get('coupon_code')}}">
                                    <button>XÁC NHẬN</button>
                                </form>
                            </div>
                            <div class="cart_total">
                                <div class="calculate">
                                    <div class="item">
                                        <span>Tạm tính:</span>
                                        <strong>{{ number_format($total, 0, ',', '.') }}đ</strong>
                                    </div>
                                    <div class="item">
                                        <span>Giảm giá: </span>
                                        <strong>{{number_format($total * Session::get('discount') /100, 0, ',', '.') }}đ</strong>
                                    </div>
                                    <div class="item">
                                        <span>Giao hàng </span>
                                        <strong>Miễn phí</strong>
                                    </div>
                                </div>
                                <div class="total">
                                    <span>Thành tiền: </span>
                                        <?php
                                            if($total > Session::get('min_total')){
                                                if(($total * Session::get('discount') /100) > (Session::get('max_discount'))){
                                                    $total =$total - Session::get('max_discount');
                                                }
                                                else{
                                                    $total =$total - ($total * Session::get('discount') /100);
                                                }
                                            }
                                            else{
                                                $total = $total - 0;
                                            }
                                        ?>
                                    <strong>{{ number_format($total, 0, ',', '.') }}đ</strong>
                                </div>
                                <div class="choose_payment">
                                    <h4>Chọn phương thức thanh toán</h4>
                                    <div class="payment_wrap active">
                                        <div class="inner">
                                            <input checked type="radio" name="payment_method" value="cod" id="cod">
                                            <label for="cod">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <div class="payment_des active">
                                            Thanh toán tiền mặt khi đã nhận được hàng
                                        </div>
                                    </div>
                                    <div class="payment_wrap">
                                        <div class="inner">
                                            <input type="radio" name="payment_method" value="vnpay" id="vnpay">
                                            <label for="vnpay">Thanh toán qua cổng VNPay</label>
                                        </div>
                                        <div class="payment_des">
                                            Thực hiện thanh toán qua ví điện tử VNPay của chúng tôi. Vui lòng giữ mã đơn hàng của bạn
                                        </div>
                                    </div>
{{--                                    <select name="payment_method" id="payment_method">--}}
{{--                                        <option value="cod">Thanh toán tiền mặt</option>--}}
{{--                                        <option value="vnpay">VNPAY</option>--}}
{{--                                    </select>--}}
                                </div>
                                <div class="go-checkout text_center">
                                    @if(Auth::user())
                                        <a href="{{ route('order') }}" class="btn_primary btn text_center">Tiến hành thanh toán</a>
                                    @else
                                        <span class="notify">Bạn cần đăng nhập để thanh toán</span>
                                        <a class="btn_small btn_secondary" href="{{ route('login') }}">Đăng nhập</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
{{--                <div class="row">--}}
{{--                    <table class="table update_cart_url" data-url="{{ route('updateCart') }}">--}}
{{--                        <thead>--}}
{{--                            <tr>--}}
{{--                                <th scope="col">STT</th>--}}
{{--                                <th scope="col">Hình ảnh</th>--}}
{{--                                <th scope="col">Tên sản phẩm</th>--}}
{{--                                <th scope="col">Giá</th>--}}
{{--                                <th scope="col">Số lượng</th>--}}
{{--                                <th scope="col">Tạm tính</th>--}}
{{--                                <th scope="col">Hành động</th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            @php $i=1; $total = 0; @endphp--}}
{{--                            @foreach($cart as $id => $item)--}}
{{--                            @php $total += $item['price']*$item['quantity']; @endphp--}}
{{--                            <tr>--}}
{{--                                <td scope="row" class="text_center">{{ $i }}</td>--}}
{{--                                <td><img src="{{ $item['images'] }}"></td>--}}
{{--                                <td>{{ $item['name'] }}</td>--}}
{{--                                <td>{{ number_format($item['price'], 0 , ',','.') }} vnđ</td>--}}
{{--                                <td class="text_center">--}}
{{--                                    <input max="99" min="1" value="{{ $item['quantity'] }}" type="number"--}}
{{--                                        class="quatity text_center">--}}
{{--                                </td>--}}
{{--                                <td>{{ number_format($item['price']*$item['quantity'], 0 , ',','.') }} vnđ</td>--}}
{{--                                <td class="text_center">--}}
{{--                                    <a href="" class="cart_update" data-id="{{ $id }}"><i class="far fa-edit"></i></a>--}}
{{--                                    <a href="" class="cart_delete" data-id="{{ $id }}"><i--}}
{{--                                            class="fas fa-trash-alt"></i></a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            @php $i++; @endphp--}}
{{--                            @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}

{{--                    <div class="right_block">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <strong>TỔNG PHỤ:</strong>--}}
{{--                                <span>{{ number_format($total, 0, ',', '.') }} vnđ</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <strong>GIAO HÀNG:</strong>--}}
{{--                                <span>Miễn phí vận chuyển</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <form action="{{ route('apply') }}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <strong>MÃ GIẢM GIÁ:</strong>--}}
{{--                                    <input type="text" name="coupon" value="{{ Session::get('coupon_code')}}">--}}
{{--                                    <div><button>APPLY</button></div>--}}
{{--                                </form>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <strong>PHƯƠNG THỨC:</strong>--}}
{{--                                <select name="payment_method" id="payment_method">--}}
{{--                                    <option value="cod">Thanh toán tiền mặt</option>--}}
{{--                                    <option value="vnpay">VNPAY</option>--}}
{{--                                </select>--}}
{{--                            </li>--}}


{{--                            <li>--}}
{{--                                <strong>TỔNG:</strong>--}}
{{--                                <?php--}}
{{--                                    if($total > Session::get('min_total')){--}}
{{--                                        if(($total * Session::get('discount') /100) > (Session::get('max_discount'))){--}}
{{--                                            $total =$total - Session::get('max_discount');--}}
{{--                                        }else{--}}
{{--                                            $total =$total - ($total * Session::get('discount') /100);--}}
{{--                                        }--}}
{{--                                    }else{--}}
{{--                                        $total = $total - 0;--}}
{{--                                    }--}}
{{--                            ?>--}}
{{--                                <h1>{{ number_format($total, 0, ',', '.') }}</h1>--}}
{{--                            </li>--}}
{{--                            <li class="checkout">--}}
{{--                                @if(Auth::user())--}}
{{--                                <a href="{{ route('order') }}" class="btn-order">Tiến hành thanh toán</a>--}}
{{--                                @else--}}
{{--                                Vui lòng <a href="{{ route('login') }}">Đăng nhập</a> khi thanh toán--}}
{{--                                @endif--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                </div>--}}
                @else
                    <div class="cart_empty">
                        <div class="img_wrap">
                            <img src="{{asset('images/empty_cart.png')}}" style="margin: 0 auto;">
                        </div>
                        <div class="text_center">
                            <h3>Giỏ hàng của bạn đang rỗng! Đặt hàng ngay tại link bên dưới</h3>
                            <a href="/shop" class="btn_primary btn"><strong>Đặt hàng ngay</strong></a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

</section>
@push('js')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btn-order').on('click',function (e) {
            // e.preventDefault();
            const payment_method = $('#payment_method').val();
            $.ajax({
                url: '{{route("applyPayment")}}',
                method: 'POST',
                data: {
                    payment_method,
                    _token: $('meta[name="csrf-token"]').attr('content')
            },
            })
          })
        });
</script>
@endpush
