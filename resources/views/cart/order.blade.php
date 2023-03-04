@extends('client/index')
@section('content')

<div>
    <h1 style="margin-top:200px;">Thông tin đặt hàng</h1>
    <form action="{{ route('saveOrder') }}" method="">
        <label for="fname">Tên người mua</label><br>
        <input type="text" id="fname" name="name" value="{{  Auth::user()->name }}"><br>
        <label for="lname">Số điện thoại</label><br>
        <input type="text" id="lname" name="phone" value="{{  Auth::user()->tel }}"><br>
        <label for="lname">Địa chỉ</label><br>
        <input type="text" id="lname" name="address" value="{{  Auth::user()->address }}"><br><br>
        


        <table>
            <table class="table update_cart_url" data-url="{{ route('updateCart') }}">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên SP</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                  </tr>
                </thead>
                <tbody>
                    @php $i=1; $total = 0; @endphp
                        @foreach($cart as $id => $item)
                            @php $total += $item['price']*$item['quantity']; @endphp
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>{{ number_format($item['price']*$item['quantity']) }}</td>
                                    
                                </tr>
                            @php $i++; @endphp
                        @endforeach	
                </tbody>
              </table>
              <input>
              
              <div><h1>TỔNG CỘNG:</h1 name="total">{{ number_format($total); }}</div>
        </table>
        <input type="hidden" id="total" name="total" value="{{ $total }}">
        <button type="submit">đặt hàng</button>
    </form>
</div>

@endsection


