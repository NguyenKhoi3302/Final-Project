@extends('layouts.guest')
@section('content')
<style>

</style>
<section class="section checkout_page cart_page">
    <div class="grid-container">
        <div class="checkout">
            <h1 class="sec_title text_center">Tiến hành thanh toán</h1>
            <form action="{{ route('saveOrder') }}" method="POST" id="checkout_form">
                @csrf
                <div class="customer_info">
                    <div class="info_wrap">
                        <h2 class="w-100 text_center">Thông tin người nhận</h2>
                        <div class="form_group w-50">
                            <label for="fname">Tên người mua <span class="required">*</span></label>
                            <input type="text" id="fname" name="name" value="{{  Auth::user()->name }}">
                            @error('name')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form_group w-50">
                            <label for="lname">Số điện thoại <span class="required">*</span></label>
                            <input type="text" id="lname" name="phone" value="{{  Auth::user()->phone }}">
                            @error('phone')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form_group w-100">
                            <label for="lname">Địa chỉ <span class="required">*</span></label>
                            <textarea name="address" id="lname" rows="2">{{  Auth::user()->address }}</textarea>
                            @error('address')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form_group w-100">
                            <label for="note">Ghi chú</label>
                            <textarea name="note" id="note" rows="4"></textarea>
                            @error('note')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="order_reviews">
                    <div class="update_cart_url" data-url="{{ route('updateCart') }}">
                        <div class="confirm_cart">
                            @php $i=1; $total = 0; @endphp
                            @foreach($cart as $id => $item)
                                @php $total += $item['price']*$item['quantity']; @endphp
                            <div class="item">
                                <span>{{ $item['name'] }} <strong>x{{ $item['quantity'] }}</strong></span>
                                <strong>{{ number_format($item['price']*$item['quantity'], 0 ,',' ,'.') }}đ</strong>
                            </div>
                                @php $i++; @endphp
                            @endforeach
                        </div>
                        <div class="confirm_calculate">
                            <div class="item">
                                <span>Thành tiền</span>
                                    <?php
                                    if($total > Session::get('min_total')){
                                        $total =$total - ($total * Session::get('discount') /100);
                                    }else{
                                        $total = $total - 0;
                                    }
                                    ?>
                                <strong>{{ number_format($total, 0 ,',' ,'.') }}đ</strong>
                            </div>
                            <div class="item">
                                <span>Giảm giá</span>
                                <strong>{{number_format($total * Session::get('discount') /100, 0, ',', '.') }}đ</strong>
                            </div>
                            <div class="item">
                                <span>Giao hàng</span>
                                <strong>Miễn phí</strong>
                            </div>
                            <div class="item">
                                <span>Phương thức thanh toán</span>
                                <strong>{{\Str::upper(session()->get('payment_method'))}}</strong>
                            </div>
                        </div>
                        <div class="total_pay">
                            <span>Thành tiền</span>
                            <strong>{{ number_format($total, 0 ,',' ,'.') }}đ</strong>
                        </div>
                    </div>
{{--                    <table class="table update_cart_url" data-url="{{ route('updateCart') }}">--}}
{{--                        <thead>--}}
{{--                            <tr>--}}
{{--                                <th scope="col">Tên Sản Phẩm</th>--}}
{{--                                <th scope="col">Thành tiền</th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            @php $i=1; $total = 0; @endphp--}}
{{--                            @foreach($cart as $id => $item)--}}
{{--                            @php $total += $item['price']*$item['quantity']; @endphp--}}
{{--                            <tr>--}}
{{--                                <td>{{ $item['name'] }} <strong>x{{ $item['quantity'] }}</strong></td>--}}
{{--                                <td>{{ number_format($item['price']*$item['quantity'], 0 ,',' ,'.') }} vnđ</td>--}}
{{--                            </tr>--}}
{{--                            @php $i++; @endphp--}}
{{--                            @endforeach--}}
{{--                        </tbody>--}}
{{--                        <tfoot>--}}
{{--                            <tr>--}}
{{--                                <td>Thành tiền</td>--}}
{{--                                <?php--}}
{{--                                    if($total > Session::get('min_total')){--}}
{{--                                        $total =$total - ($total * Session::get('discount') /100);--}}
{{--                                    }else{--}}
{{--                                        $total = $total - 0;--}}
{{--                                    }--}}
{{--                                ?>--}}
{{--                                <th>{{ number_format($total, 0 ,',' ,'.') }} vnđ</th>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Giao hàng</td>--}}
{{--                                <th>Miễn phí</th>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Phương thức thanh toán</td>--}}
{{--                                <th>{{\Str::upper(session()->get('payment_method'))}}</th>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Tổng </td>--}}
{{--                                <th class="total">{{ number_format($total, 0 ,',' ,'.') }} vnđ</th>--}}
{{--                            </tr>--}}
{{--                        </tfoot>--}}
{{--                    </table>--}}
                    <input type="hidden" id="total" name="total" value="{{ $total }}">
                    <button type="submit" class="btn btn_primary"><strong>Đặt hàng</strong></button>
                </div>
            </form>
        </div>
    </div>
</section>


@endsection
