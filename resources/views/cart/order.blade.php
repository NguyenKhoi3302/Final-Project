@extends('client/index')
@section('content')
    <style>
        .form_group.w-100{
            width: 100%;
        }
        .form_group.w-50{
            width: calc(50% - 10px);
        }
        .customer_info{
            width: 65%;
        }
        .info_wrap{
            display: flex;
            flex-wrap: wrap;

            justify-content: space-between;
        }
        form#checkout_form{
            display: flex;
            grid-column-gap: 30px;
        }
        form#checkout_form > .order_reviews{
            padding: 20px;
            border: 1px solid #ced4da;
            width: 35%;
        }
        label{
            display: block;
            margin-bottom: 8px;
            margin-top: 15px;
        }
        input,
        textarea{
            width: 100%;
            padding: 10px 20px;
            border: 1px solid #ced4da;
            font-size: 17px;
            transition: 0.3s ease-in-out;
        }
        input:focus,
        input:focus-visible,
        textarea:focus,
        textarea:focus-visible{
            border: 1px solid #6c6c6c;
            outline: none;
        }
        section.checkout_page{
            padding: 70px 0;
        }
        th{
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 18px;
            margin-left: 10px;
        }
        td{
            font-size: 15px;
            padding: 10px 0 20px;
        }
        tr{
            border-bottom: 1px solid #ced4da;
        }
        tr > *:first-child{
            width: 60%;
        }

        tr > *:last-child{
            width: 40%;
        }
        button{
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
        }
        button:hover{
            background-color: transparent;
            color: #000000
        }

    </style>
    <section class="section checkout_page">
        <div class="grid-container">
            <div>
                <h1>Thông tin đặt hàng</h1>
                <form action="{{ route('saveOrder') }}" method="" id="checkout_form">
                    <div class="customer_info">
                        <div class="info_wrap">
                            <div class="form_group w-50">
                                <label for="fname">Tên người mua</label>
                                <input type="text" id="fname" name="name" value="{{  Auth::user()->name }}">
                            </div>
                            <div class="form_group w-50">
                                <label for="lname">Số điện thoại</label>
                                <input type="text" id="lname" name="phone" value="{{  Auth::user()->phone }}">
                            </div>
                            <div class="form_group w-100">
                                <label for="lname">Địa chỉ</label>
                                <textarea name="address" id="lname" rows="5">{{  Auth::user()->address }}</textarea>
                                {{--                            <input type="text" id="lname" name="address" value="">--}}
                            </div>
                        </div>

                    </div>
                    <div class="order_reviews">
                        <table class="table update_cart_url" data-url="{{ route('updateCart') }}">
                            <thead>
                            <tr>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1; $total = 0; @endphp
                            @foreach($cart as $id => $item)
                                @php $total += $item['price']*$item['quantity']; @endphp
                                <tr>
                                    <td>{{ $item['name'] }} <strong>x{{ $item['quantity'] }}</strong></td>
                                    <td>{{ number_format($item['price']*$item['quantity'], 0 ,',' ,'.') }} vnđ</td>
                                </tr>
                                @php $i++; @endphp
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Tổng phụ</th>
                                    <td>{{ number_format($total, 0 ,',' ,'.') }} vnđ</td>
                                </tr>
                                <tr>
                                    <th>Giao hàng</th>
                                    <td>Miễn phí vận chuyển</td>
                                </tr>
                                <tr>
                                    <th>Tổng </th>
                                    <td>{{ number_format($total, 0 ,',' ,'.') }} vnđ</td>
                                </tr>
                            </tfoot>
                        </table>
                        <input type="hidden" id="total" name="total" value="{{ $total }}">
                        <button type="submit">đặt hàng</button>
                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection


