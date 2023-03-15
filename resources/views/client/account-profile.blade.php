@extends('layouts.guest')
@section('content')
    <section class="section account_profile">
        <div class="grid-container">
            <div class="left_account">
                <div class="left_col_menu">
                    <h4>Danh mục</h4>
                    <ul>
                        <li data-id="0" class="active">Thông tin tài khoản</li>
                        <li data-id="1">Chỉnh sửa tài khoản</li>
                        <li data-id="2">Lịch sử mua hàng</li>
                        <li data-id="3">Đổi mật khẩu</li>
                        <li>
                            <form action="{{url('/logout')}}">
                                <input type="submit" value="Đăng xuất">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right_account">
                <div id="0" class="info_wrap active">
                    <div class="info_box">
                        <div class="avt_wrap">
                            <img src="{{asset('images/icon/Frame-18810.png')}}" alt="">
                        </div>
                        <div class="name">
                            Từ Nguyên Khôi
                        </div>
                        <div class="email">
                            khoitnps15595@fpt.edu.vn
                        </div>
                        <div class="edit_profile_btn">
                            Chỉnh sửa thông tin
                        </div>
                    </div>
                    <div class="address_box">
                        <div class="name">
                            Từ Nguyên Khôi
                        </div>
                        <div class="item">
                            <span>Địa chỉ</span>
                            <p>147 Nguyễn Văn Thủ - Đakao - Quận 1</p>
                        </div>
                        <div class="item">
                            <span>Số điện thoại</span>
                            <p>0123456789</p>
                        </div>
                        <div class="item">
                            <span>Email</span>
                            <p>khoitnps15595@fpt.edu.vn</p>
                        </div>
                    </div>
                    <div class="pending_order">
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
                </div>
            </div>
        </div>
    </section>
@endsection
