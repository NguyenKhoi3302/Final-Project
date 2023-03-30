@extends('layouts.guest')
@section('content')
<style>
    .strike {
        text-decoration: line-through;
    }
    .item_text_ship{
        background-color: #474093;
        height: 50px;
        text-align: center;
        color: white;
    }
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
                            <input required type="text" id="fname" name="name" value="{{  Auth::user()->name }}">
                            @error('name')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form_group w-50">
                            <label for="lname">Số điện thoại <span class="required">*</span></label>
                            <input required type="text" id="lname" name="phone" value="{{  Auth::user()->phone }}">
                            @error('phone')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form_group w-33">
                            <label for="lname">Tỉnh thành phố<span class="required">*</span></label>
                            <select  id="province" name="province" required >
                                <option value="">Chọn tỉnh/thành phố</option>
                            </select>
                        </div>
                        <div class="form_group w-33">
                            <label for="lname">Quân huyện<span class="required">*</span></label>
                            <select  id="district" name="district" required>
                                <option value="">Chọn Quận/huyên</option>
                            </select>
                        </div>
                        <div class="form_group w-33">
                            <label for="lname">Phường xã<span class="required">*</span></label>
                            <select id="ward" name="ward" required>
                                <option value=''>Chọn phường/xã</option>
                            </select>
                        </div>
                        <div class="form_group w-100">
                            <label for="lname">Địa chỉ <span class="required">*</span></label>
                            <textarea required name="address" id="lname" rows="2">{{  Auth::user()->address }}</textarea>
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
                                <strong style=" text-decoration: line-through;">{{number_format($total * Session::get('discount') /100, 0, ',', '.') }}đ</strong>
                            </div>
                            <div class="item">
                                <span>Giao hàng</span>
                                <strong class="ship">30.000đ</strong>
                            </div>
                            <div class="item">
                                <span>Phương thức thanh toán</span>
                                <strong>{{\Str::upper(session()->get('payment_method'))}}</strong>
                            </div>
                            <div class="item_text_ship">
                                <p>Miễn phí ship khi bạn ở khu vực Thành phố Hồ Chí Minh</p>
                            </div>
                        </div>
                        <div class="total_pay">
                            <span>Thành tiền</span>
                            <?php $total = $total + 30000 ?>
                            <strong>{{ number_format( $total, 0 ,',' ,'.') }}đ</strong>
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

                    <input type="hidden" id="total" name="total" value="{{ $total}}">
                    <button type="submit" class="btn btn_primary"><strong>Đặt hàng</strong></button>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $.getJSON("https://provinces.open-api.vn/api/p/", function(provinces) {
            var provinceSelect = $("#province");
            provinceSelect.empty();
            provinceSelect.append("<option value=''>Chọn tỉnh/thành phố</option>");
            $.each(provinces, function(i, province) {
                provinceSelect.append("<option data-id='"+ province.code + "'  value='" + province.name + "'>" + province.name + "</option>");
            });
        });

        $("#province").change(function() {
            var provinceId = $(this).find(':selected').data('id');
            var totalPrice = parseInt($("#total").val());
            if (provinceId == 79) {
                totalPrice -= 30000;
                $(".ship").addClass('strike');
            } else {
                totalPrice = <?php echo $total ?>;
                $(".ship").removeClass('strike');
            }
            document.querySelector(".total_pay strong").textContent = formatMoney(totalPrice) + "đ";
            $("#total").val(totalPrice);
            $("#district").empty();
            $("#ward").empty();

            axios.get("https://provinces.open-api.vn/api/p/" + provinceId + "?depth=2")
                .then(function(response) {
                    var wardSelect = $("#ward");
                    wardSelect.append("<option value=''>Chọn phường/xã</option>");
                    var districtSelect = $("#district");
                    districtSelect.append("<option value=''>Chọn quận/huyện</option>");
                    $.each(response.data.districts, function(i, district) {
                        districtSelect.append("<option data-id='"+ district.code + "' value='" + district.name + "'>" + district.name + "</option>");
                    });
                })
                .catch(function(error) {
                    console.log(error);
                });
        });

        $("#district").change(function() {
            var districtId =  $(this).find(':selected').data('id');

            $("#ward").empty(); // Reset danh sách phường/xã

            axios.get("https://provinces.open-api.vn/api/d/" + districtId + "?depth=2")
                .then(function(response) {
                    var wardSelect = $("#ward");
                    wardSelect.append("<option value=''>Chọn phường/xã</option>");
                    $.each(response.data.wards, function(i, ward) {
                        wardSelect.append("<option data-id='" + ward.code + "' value='" + ward.name + "'>" + ward.name + "</option>");
                    });
                })
                .catch(function(error) {
                    console.log(error);
                });
        });

        function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = ",") {
            decimalCount = Math.abs(decimalCount);
            decimalCount = isNaN(decimalCount) ? 2 : decimalCount;
            const negativeSign = amount < 0 ? "-" : "";
            let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
            let j = (i.length > 3) ? i.length % 3 : 0;

            return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
        }

    </script>
@endsection
