@extends('client/index')
@section('content')
<style>
    input[type=text], input[type=password], {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
</style>

    
    <section class="section account_profile">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="grid-container">
            <div class="left_account">
                <div class="left_col_menu">
                    <h4>Danh mục</h4>
                    <ul>
                        <li data-id="0" class="active">Thông tin tài khoản</li>
                        <li data-id="1" class="history">Lịch sử mua hàng</li>
                        <li data-id="2" class="updatePass">Đổi mật khẩu</li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right_account">
                <div id="0" class="info_wrap active">
                    <div class="info_box">
                        <div class="avt_wrap">
                            @if($user->avatar)
                                <img src="{{asset('images/uploads/'.$user->avatar)}}" alt="" style="width:250px; height:250px;">
                            @else
                                <img src="{{asset('images/logo/page_logo.png')}}" alt="" style="width:250px; height:250px;">
                            @endif
                        </div>
                    </div>
                    <div class="address_box">
                        <div class="item">
                            <span>Tên người dùng</span>
                            <p>{{ $user->name }}</p>
                        </div>
                        <div class="item">
                            <span>Địa chỉ  email</span>
                            <p>{{ $user->email }}</p>
                        </div>
                        <div class="item">
                            <span>Số điện thoại</span>
                            <p>{{ $user->tel }}</p>
                        </div>
                        <div class="item">
                            <span>Địa chỉ</span>
                            <p>{{ $user->address }}</p>
                        </div>
                        <div class="edit_profile_btn">
                            <a href="{{ url('profileEdit/'.$user->id) }}">Chỉnh sửa thông tin</a>
                        </div>
                    </div>
                </div>
                <div  id="1" class="pending_order history">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ngày đặt hàng</th>
                                <th>Thành tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>01/02/2022</td>
                                <td>Chưa thanh toán</td>
                                <td>25.132.145 vnđ</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>01/02/2022</td>
                                <td>Chưa thanh toán</td>
                                <td>25.132.145 vnđ</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>01/02/2022</td>
                                <td>Chưa thanh toán</td>
                                <td>25.132.145 vnđ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div  id="2" class="pending_order updatePass">
                        <form action="{{ route('pass.update') }}" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Old Password</label>
                                <input name="old_password" type="password" class="form-control" id="oldPasswordInput">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">New Password</label>
                                <input name="new_password" type="password" class="form-control" id="newPasswordInput">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput">
                            </div>

                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </section>
@endsection
