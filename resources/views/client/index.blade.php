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
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

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
                <li><a href="{{ route('showCart') }}"><i class="fas fa-shopping-cart"></i></a></li>
                <li class="login_dropdown">
                    <i class="far fa-user login_form"></i>
                </li>
            </ul>
        </div>
    </div>
    <div class="login_box">
        @if(Auth::check())
            <h3>Xin chào {{ $user = Auth::user()->name }} </h3>
            <a href="{{ route('logout') }}">Đăng xuất</a><br>
            <a href="{{ route('profile') }}">Thông tin cá nhân</a>
        @else
            <h3><a href="{{ route('login') }}">Đăng nhập</a></h3>
            <h3><a href="{{ route('register') }}">Đăng ký</a></h3>
        @endif
    </div>
</header>
<div class="site_body grid-container">
    <div class="site_content">
        @yield('content')
    </div>
</div>
<footer class="site_footer">
    <div class="inside_footer grid-container">
        <div class="footer_main">
            <div class="footer_top">
                <div class="footer_logo">
                    <img src="{{asset('images/logo/page_logo_2.png')}}" alt="">
                </div>
                <div class="footer_info">
                    <p>
                        <strong>Địa chỉ:</strong>
                        <a target="_blank" href="https://goo.gl/maps/eRJG5wf4kqgJRt5Z8">
                            FPT Polytechnic - Tòa F Tân Hưng Thuận, Quận 12, Thành phố Hồ Chí Minh, Việt Nam</a>
                    </p>
                    <p>
                        <strong>Số điện thoại:</strong>
                        <a href="tel:0854643848">0854.643.848</a>
                    </p>
                    <p>
                        <strong>Fax:</strong>
                        <span>0123456789</span>
                    </p>
                </div>
                <div class="footer_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4607203898763!2d106.62490081424649!3d10.852520060753443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b161f50ae47%3A0x2328d1d1acc3b11a!2sFPT%20Polytechnic%20-%20T%C3%B2a%20F!5e0!3m2!1svi!2s!4v1671463256338!5m2!1svi!2s" width="400" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="item">
                    <div class="title">
                        Liên kết nhanh
                    </div>
                    <ul>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="">Tin tức</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="title">
                        Danh mục sản phẩm
                    </div>
                    <ul>
                        <li><a href="">Danh mục 1</a></li>
                        <li><a href="">Danh mục 2</a></li>
                        <li><a href="">Danh mục 3</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="title">
                        Danh mục tin tức
                    </div>
                    <ul>
                        <li><a href="">Danh mục 1</a></li>
                        <li><a href="">Danh mục 2</a></li>
                        <li><a href="">Danh mục 3</a></li>
                    </ul>
                </div>
                <div class="item social_wrap">
                    <div class="social">
                        <a href="">
                            <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="43" height="42" rx="5" fill="#337FFF"/>
                                <path d="M26.7607 22.3672L27.3734 18.5651H23.5993V16.0937C23.5993 15.054 24.1262 14.0381 25.8111 14.0381H27.551V10.8004C26.5378 10.6426 25.5139 10.5572 24.4877 10.5449C21.3815 10.5449 19.3536 12.3688 19.3536 15.6659V18.5651H15.9104V22.3672H19.3536V31.5636H23.5993V22.3672H26.7607Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <div class="social">
                        <a href="">
                            <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="43" height="42" rx="5" fill="#FF0000"/>
                                <path d="M33.4597 15.2232C33.1789 14.1923 32.3484 13.379 31.2917 13.1003C29.3812 12.6001 21.7155 12.6001 21.7155 12.6001C21.7155 12.6001 14.0536 12.6001 12.1392 13.1003C11.0864 13.3752 10.2559 14.1885 9.97124 15.2232C9.46045 17.0941 9.46045 21.0001 9.46045 21.0001C9.46045 21.0001 9.46045 24.9061 9.97124 26.777C10.252 27.8079 11.0825 28.6212 12.1392 28.8999C14.0536 29.4001 21.7155 29.4001 21.7155 29.4001C21.7155 29.4001 29.3812 29.4001 31.2917 28.8999C32.3445 28.625 33.175 27.8117 33.4597 26.777C33.9705 24.9061 33.9704 21.0001 33.9704 21.0001C33.9704 21.0001 33.9705 17.0941 33.4597 15.2232Z" fill="white"/>
                                <path d="M19.2668 24.6006L25.6341 21.0001L19.2668 17.3995V24.6006Z" fill="#FF0000"/>
                            </svg>
                        </a>
                    </div>
                    <div class="social">
                        <a href="">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="42" height="42" rx="5" fill="#0180C7"/>
                                <g clip-path="url(#clip0_2145_3008)">
                                    <path d="M10.4657 24.3535C11.8542 24.3535 13.1599 24.3443 14.4564 24.3535C15.1829 24.3628 15.5782 24.6692 15.6518 25.254C15.7346 25.9874 15.3116 26.4794 14.5208 26.4887C13.0312 26.5073 11.5507 26.498 10.0611 26.498C9.62893 26.498 9.20595 26.5166 8.77378 26.4887C8.24045 26.4609 7.71632 26.3495 7.46805 25.7925C7.21059 25.2355 7.39449 24.7342 7.74391 24.2793C9.15998 22.4597 10.5852 20.6309 12.0105 18.8114C12.0933 18.7 12.176 18.5886 12.2588 18.4865C12.176 18.3287 12.0381 18.4029 11.9277 18.4029C10.9347 18.3936 9.93238 18.4029 8.93929 18.3936C8.70941 18.3936 8.47953 18.3751 8.25884 18.3194C7.79908 18.1987 7.51403 17.8274 7.51403 17.3818C7.51403 16.9362 7.78069 16.5555 8.24045 16.4256C8.46114 16.3606 8.69102 16.342 8.9209 16.342C10.5577 16.3327 12.2036 16.3327 13.8404 16.342C14.1346 16.342 14.4197 16.3513 14.7047 16.4441C15.33 16.6577 15.5966 17.2425 15.3484 17.8552C15.1277 18.3844 14.7783 18.8392 14.4288 19.2941C13.2151 20.8259 12.0013 22.3669 10.7967 23.9079C10.7048 24.0286 10.6128 24.1493 10.4657 24.3535Z" fill="white"/>
                                    <path d="M21.1322 19.4612C21.3529 19.1734 21.5828 18.9042 21.9598 18.83C22.6862 18.6814 23.3667 19.1549 23.3759 19.8975C23.4034 21.7542 23.3942 23.6109 23.3759 25.4675C23.3759 25.9781 23.0632 26.3587 22.6127 26.5166C22.1345 26.6837 21.6472 26.563 21.3253 26.1545C21.169 25.9596 21.1046 25.9224 20.8839 26.0988C20.0472 26.7858 19.1001 26.9065 18.0794 26.5723C16.4427 26.0338 15.7714 24.7434 15.5875 23.1653C15.3944 21.4664 15.9553 20.0182 17.4541 19.127C18.7139 18.3936 19.9828 18.4493 21.1322 19.4612ZM17.8771 22.8589C17.8863 23.1746 17.9874 23.6109 18.2633 23.9822C18.861 24.7899 20.084 24.7899 20.6725 23.9822C21.1874 23.2767 21.1874 22.1163 20.6725 21.4107C20.3966 21.0394 20.038 20.8444 19.5782 20.8166C18.5759 20.7609 17.8679 21.55 17.8771 22.8589Z" fill="white"/>
                                    <path d="M27.5045 22.9146C27.4309 20.5288 28.9849 18.7464 31.1826 18.6814C33.5273 18.6072 35.2377 20.1946 35.3112 22.5154C35.3848 24.8641 33.9595 26.5258 31.7619 26.7486C29.3711 26.9807 27.4677 25.2262 27.5045 22.9146ZM29.8125 22.6825C29.8125 23.156 29.9228 23.6016 30.2079 23.9822C30.7872 24.7713 32.0009 24.7806 32.5894 24.0008C33.1227 23.2952 33.1227 22.107 32.5986 21.4014C32.3228 21.0301 31.955 20.8444 31.5044 20.8166C30.5113 20.7609 29.8217 21.5314 29.8125 22.6825Z" fill="white"/>
                                    <path d="M26.6954 21.0672C26.6954 22.5062 26.7046 23.9451 26.6954 25.384C26.6862 26.2102 25.969 26.7672 25.1966 26.563C24.7368 26.4423 24.3874 25.9503 24.3874 25.3654C24.3874 22.9053 24.3874 20.4453 24.3874 17.9852C24.3874 17.5489 24.3782 17.1218 24.3874 16.6855C24.3966 15.9707 24.8472 15.5065 25.5276 15.5065C26.2264 15.4972 26.6954 15.9614 26.6954 16.7041C26.7046 18.1616 26.6954 19.6098 26.6954 21.0672Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2145_3008">
                                        <rect width="27.9811" height="11.2607" fill="white" transform="translate(7.33936 15.5065)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <div class="social">
                        <a href="">
                            <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="43" height="42" rx="5" fill="url(#paint0_linear_2145_3026)"/>
                                <path d="M17.9215 21.0538C17.9215 19.1192 19.5263 17.5504 21.5064 17.5504C23.4866 17.5504 25.0922 19.1192 25.0922 21.0538C25.0922 22.9885 23.4866 24.5572 21.5064 24.5572C19.5263 24.5572 17.9215 22.9885 17.9215 21.0538ZM15.9831 21.0538C15.9831 24.0343 18.4559 26.4502 21.5064 26.4502C24.557 26.4502 27.0298 24.0343 27.0298 21.0538C27.0298 18.0734 24.557 15.6574 21.5064 15.6574C18.4559 15.6574 15.9831 18.0734 15.9831 21.0538ZM25.9576 15.4434C25.9575 15.6929 26.0331 15.9367 26.1749 16.1442C26.3166 16.3516 26.5182 16.5133 26.754 16.6089C26.9898 16.7044 27.2493 16.7295 27.4997 16.6809C27.7501 16.6324 27.9802 16.5123 28.1608 16.336C28.3414 16.1597 28.4644 15.9351 28.5143 15.6905C28.5642 15.4458 28.5387 15.1923 28.4411 14.9618C28.3435 14.7313 28.1782 14.5343 27.966 14.3956C27.7537 14.257 27.5042 14.1829 27.2489 14.1828H27.2484C26.9062 14.183 26.5781 14.3158 26.3361 14.5522C26.094 14.7885 25.9579 15.1091 25.9576 15.4434ZM17.1608 29.6082C16.1121 29.5615 15.5421 29.3908 15.1633 29.2466C14.6611 29.0556 14.3028 28.8281 13.9261 28.4605C13.5493 28.093 13.3161 27.7432 13.1215 27.2526C12.9738 26.8826 12.7991 26.3255 12.7515 25.3009C12.6993 24.1932 12.6889 23.8604 12.6889 21.0539C12.6889 18.2474 12.7002 17.9156 12.7515 16.8069C12.7992 15.7822 12.9752 15.2263 13.1215 14.8552C13.317 14.3646 13.5499 14.0145 13.9261 13.6464C14.3023 13.2783 14.6603 13.0505 15.1633 12.8603C15.542 12.716 16.1121 12.5454 17.1608 12.4988C18.2947 12.4478 18.6353 12.4377 21.5064 12.4377C24.3776 12.4377 24.7186 12.4487 25.8533 12.4988C26.9021 12.5455 27.4711 12.7174 27.8509 12.8603C28.3531 13.0505 28.7114 13.2788 29.0881 13.6464C29.4648 14.014 29.6972 14.3646 29.8927 14.8552C30.0404 15.2252 30.215 15.7822 30.2627 16.8069C30.3149 17.9156 30.3253 18.2474 30.3253 21.0539C30.3253 23.8604 30.3149 24.1922 30.2627 25.3009C30.215 26.3255 30.0394 26.8825 29.8927 27.2526C29.6972 27.7432 29.4643 28.0933 29.0881 28.4605C28.7119 28.8278 28.3531 29.0556 27.8509 29.2466C27.4722 29.3909 26.9021 29.5616 25.8533 29.6082C24.7195 29.6591 24.3789 29.6693 21.5064 29.6693C18.634 29.6693 18.2943 29.6591 17.1608 29.6082ZM17.0718 10.6081C15.9267 10.6591 15.1442 10.8365 14.4609 11.0963C13.7532 11.3645 13.1541 11.7245 12.5554 12.3084C11.9568 12.8924 11.5893 13.4787 11.3148 14.1701C11.0489 14.8382 10.8673 15.6022 10.8151 16.721C10.7621 17.8416 10.75 18.1998 10.75 21.0538C10.75 23.9078 10.7621 24.2661 10.8151 25.3866C10.8673 26.5055 11.0489 27.2695 11.3148 27.9375C11.5893 28.6285 11.9569 29.2154 12.5554 29.7992C13.154 30.3829 13.7532 30.7423 14.4609 31.0114C15.1455 31.2712 15.9267 31.4486 17.0718 31.4995C18.2193 31.5505 18.5853 31.5631 21.5064 31.5631C24.4276 31.5631 24.7942 31.5513 25.9411 31.4995C27.0863 31.4486 27.8682 31.2712 28.552 31.0114C29.2593 30.7423 29.8588 30.3832 30.4575 29.7992C31.0561 29.2152 31.4228 28.6285 31.6981 27.9375C31.964 27.2695 32.1465 26.5054 32.1978 25.3866C32.2499 24.2652 32.262 23.9078 32.262 21.0538C32.262 18.1998 32.2499 17.8416 32.1978 16.721C32.1456 15.6022 31.964 14.8378 31.6981 14.1701C31.4228 13.4791 31.0552 12.8934 30.4575 12.3084C29.8597 11.7235 29.2593 11.3645 28.5529 11.0963C27.8682 10.8365 27.0862 10.6582 25.942 10.6081C24.7951 10.5572 24.4284 10.5445 21.5073 10.5445C18.5862 10.5445 18.2193 10.5563 17.0718 10.6081Z" fill="white"/>
                                <defs>
                                    <linearGradient id="paint0_linear_2145_3026" x1="42.1735" y1="42" x2="0.185166" y2="-0.9881" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FBE18A"/>
                                        <stop offset="0.21" stop-color="#FCBB45"/>
                                        <stop offset="0.38" stop-color="#F75274"/>
                                        <stop offset="0.52" stop-color="#D53692"/>
                                        <stop offset="0.74" stop-color="#8F39CE"/>
                                        <stop offset="1" stop-color="#5B4FE9"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" section copyright_wrap">
            <div class="copyright">
                Copyright © 2022. Code by NguyenKhoi
            </div>

        </div>
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

