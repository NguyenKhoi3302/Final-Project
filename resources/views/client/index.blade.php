<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="icon" href="{{asset('images/logo/page_logo.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/unsematic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/frontend.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/imagehover.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<header class="site_header">
    <div class="inside_header grid-container">
        <div class="wrap_search_popup text_center">
            <div class="bg_close"></div>
            <div class="inner">
                <div class="button_close">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"></path></svg>
                </div>
                <form role="search" method="get" id="searchform" class="searchform" action="">
                    <input type="text" value="" name="s" id="s" placeholder="Nhập ở đây">
                    <input type="submit" id="searchsubmit" value="Tìm kiếm">
                </form>
            </div>
        </div>
        <div class="logo">
            <a href="{{url('/')}}">
                <img src="{{asset('images/logo/page_logo_2.png')}}" alt="">
            </a>
        </div>
        <div class="primary_menu">
            <ul>
                <li class="active"><a href="/">Trang chủ</a></li>
                <li><a href="{{url('/shop')}}">Sản phẩm</a></li>
                <li><a href="{{url('/about')}}">Về chúng tôi</a></li>
                <li><a href="{{url('/news')}}">Tin tức</a></li>
                <li><a href="{{url('/contact')}}">Liên hệ</a></li>
            </ul>
        </div>
        <div class="header_actions">
            <ul>
                <li class="search search_item search_open"><i class="fas fa-search"></i></li>
                <li><i class="fas fa-shopping-cart"></i></li>
                <li class="login_dropdown">
                    <i class="far fa-user login_form"></i>
                </li>
            </ul>
        </div>
    </div>
{{--    @if (Auth::check())--}}
{{--        <div class="login_box">--}}
{{--            <div class="user_info">--}}
{{--                <div class="ava_wrap">--}}
{{--                    <img src="{{asset('images/icon/Frame-18806.png')}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="user_name">--}}
{{--                    <h5>{{Auth::user()->name}}</h5>--}}
{{--                    <span> {{Auth::user()->email}}</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="user_link">--}}
{{--                <ul>--}}
{{--                    <li><a href="/">Thay đổi thông tin</a></li>--}}
{{--                    <li><a href="/">Lịch sử mua hàng</a></li>--}}
{{--                    <li><a href="/">Đổi mật khẩu</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            @if(Auth::user()->idgroup == 1)--}}
{{--                <div class="admin">--}}
{{--                    <a href="{{url('/nk-admin')}}">Trang quản trị</a>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <form id="logout_frm" action="{{ route('logout') }}" method="POST">--}}
{{--                <input type="submit" value="Đăng xuất">--}}
{{--                {{ csrf_field() }}--}}
{{--            </form>--}}
{{--            <span class="close_logn_form"><i class="fas fa-times"></i></span>--}}
{{--        </div>--}}
{{--    @else--}}
        <div class="login_box">
{{--            <form id="login_box" method="POST" action="{{ route('login') }}"> @csrf--}}
            <form id="login_box" method="POST" action=""> @csrf
                <h4>Đăng nhập</h4>
                <input  id="email" type="email" name="email" :value="old('email')" placeholder="Email">
                <div class="form_gr">
                    <input id="password" type="password" name="password" placeholder="Mật khẩu">
                    <a class="forgot_pass" href="{{url('forgot-password')}}">Quên?</a>
                </div>
                <input type="submit" value="Đăng nhập">
                <a href="/register">Tạo tài khoản</a>
            </form>
            <span class="close_logn_form"><i class="fas fa-times"></i></span>
        </div>
{{--    @endif--}}
</header>
<div class="site_body grid-container">
    <div class="site_content">
        @yield('content')
    </div>
</div>
<footer class="site_footer">
    <div class="inside_footer grid-container">

    </div>
</footer>
</body>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/counterUp.js')}}"></script>
<script src="{{asset('assets/js/swiper.js')}}"></script>
<script src="{{asset('assets/js/frontend.js')}}"></script>
</html>

