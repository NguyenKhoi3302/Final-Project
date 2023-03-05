<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">;
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
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

    .cart{
        margin-top: 200px;
    }
</style>
<div class="cart" data-url="{{ route('deleteCart') }}">
    <div class="container">
        <div class="row">
            <table class="table update_cart_url" data-url="{{ route('updateCart') }}">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên SP</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                    @php $i=1; $total = 0; @endphp
                    @foreach($cart as $id => $item)
                        @php $total += $item['price']*$item['quantity']; @endphp
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td><img src="images/uploads/{{ $item['images'] }}"></td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ number_format($item['price']) }}</td>
                            <td><input max="99" min="1" value="{{ $item['quantity'] }}" type="number" class="quatity"></td>
                            <td>{{ number_format($item['price']*$item['quantity']) }}</td>
                            <td>
                                <a href="" class="cart_update" data-id="{{ $id }}">sửa</a>
                                <a href="" class="cart_delete" data-id="{{ $id }}">xoá</a>
                            </td>
                        </tr>
                    @php $i++; @endphp
                    @endforeach	
                </tbody>
              </table>
              <div><h1>TỔNG CỘNG:</h1>{{ number_format($total); }}</div>

              @if(Auth::user())

              <div><h1><a href="{{ route('order') }}">Thanh toán</a></h1></div>

              @else  
              <div><h1><a>Thanh toán</a></h1></div>
              Vui lòng <a href="{{ route('login') }}">Đăng nhập</a> khii thanh  toán  !!
              @endif
        </div>
    </div>
</div>