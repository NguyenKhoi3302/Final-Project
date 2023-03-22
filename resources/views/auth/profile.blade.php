@extends('layouts.guest')
@section('content')
    <section class="section account_profile">
        <div class="grid-container">
            <div class="left_account">
                <div class="info_box">
                    <div class="avt_wrap">
                        @if($user->avatar)
                            <img src="{{asset($user->avatar)}}" alt="">
                        @else
                            <img src="{{asset('images/logo/page_logo.png')}}" alt="" style="width:250px; height:250px;">
                        @endif
                    </div>
                    <div class="info">
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
                <div class="left_col_menu">
                    <ul>
                        <li data-id="0" class="active">Thông tin tài khoản</li>
                        <li data-id="1" class="history">Lịch sử mua hàng</li>
                        <li data-id="2" class="update_pass">Đổi mật khẩu</li>
                        <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
            <div class="right_account">
                <div id="0" class="info_wrap active">
                    <h2 class="sec_title text_center">Thông tin tài khoản</h2>
                    <form action="{{ url('profileUpdate/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="info_inner_wrap active">
                            <div class="input_wrap">
                                <label for="image">Ảnh đại diện</label>
                                <input name="avatar" type="file" id="image" multiple="false" accept="image/*" onchange="uploadIm()"/><br>
                            </div>
                            <div class="input_wrap">
                                <label for="name">Tên người  dùng <span class="required">*</span></label>
                                <input type="text" id="name" name="name" value="{{$user->name}}">
                                @if(!empty($errors->name))
                                    <span class="invalid">@error('name') {{$message}} @enderror</span>
                                @endif
                            </div>
                            <div class="input_wrap">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" disabled readonly value="{{$user->email}}">
                            </div>
                            <div class="input_wrap">
                                <label for="tel">Số  điện  thoại <span class="required">*</span></label>
                                <input type="text" id="tel" name="tel" value="{{$user->phone}}">
                                @if(!empty($errors->name))
                                    <span class="invalid">@error('phone') {{$message}} @enderror</span>
                                @endif
                            </div>
                            <div class="input_wrap">
                                <label for="address">Địa  chỉ <span class="required">*</span></label>
                                <input type="text" id="address" name="address" value="{{$user->address}}">
                                @if(!empty($errors->name))
                                    <span class="invalid">@error('address') {{$message}} @enderror</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn_primary">
                                <b>Cập nhật</b>
                            </button>
                        </div>
                    </form>
                </div>
                <div id="1" class="pending_order history">
                    <h2 class="sec_title text_center">Lịch sử mua hàng</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ngày mua</th>
                                <th>Thành tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>01/02/2022</td>
                                <td>25.132.145 vnđ</td>
                                <td>Chưa thanh toán</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01/02/2022</td>
                                <td>25.132.145 vnđ</td>
                                <td>Chưa thanh toán</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>01/02/2022</td>
                                <td>25.132.145 vnđ</td>
                                <td>Chưa thanh toán</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>01/02/2022</td>
                                <td>25.132.145 vnđ</td>
                                <td>Chưa thanh toán</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>01/02/2022</td>
                                <td>25.132.145 vnđ</td>
                                <td>Chưa thanh toán</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="2" class="updatePass">
                    <form action="{{ route('pass.update') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="oldPasswordInput" class="form-label">Mật khẩu cũ <span class="required">*</span></label>
                            <input name="old_password" type="password" class="form-control" id="oldPasswordInput">
                            @error('old_password')
                                <span class="invalid">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="newPasswordInput" class="form-label">Mật khẩu mới <span class="required">*</span></label>
                            <input name="new_password" type="password" class="form-control" id="newPasswordInput">
                            @error('new_password')
                                <span class="invalid">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="confirmNewPasswordInput" class="form-label">Xác nhận mật khẩu <span class="required">*</span>   </label>
                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput">
                        </div>

                        <div class="card-footer">
                            <button class="btn_primary btn"><b>Lưu mật khẩu</b></button>
                        </div>
                    </form>
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert" style="display:block !important;">
                        {{ session('status') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger" role="alert" style="display:block !important;">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
