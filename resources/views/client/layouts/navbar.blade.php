@foreach($footer['footer_meta'] as $item)
    @switch($item->meta_key)
        @case('logo_page')
            @php $logo = $item->meta_value @endphp
            @break
    @endswitch
@endforeach
<div class="inside_header grid-container">
  <div class="wrap_search_popup text_center">
    <div class="bg_close"></div>
    <div class="inner">
      <div class="button_close">
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
          <path
            d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z">
          </path>
        </svg>
      </div>
      <form method="get" id="searchform" class="searchform" action="/search">
        <input type="text" value="" name="s" id="s" placeholder="Nhập ở đây">
        <input type="submit" id="searchsubmit" value="Tìm kiếm">
      </form>
    </div>
  </div>
  <div class="logo">
    <a href="{{url('/')}}">
        {!! App\Http\Controllers\Controller::get_img_attachment($logo) !!}
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
  <div class="user_info">
    <div class="user_name">
      <h5>{{ $user = Auth::user()->name }}</h5>
      <span> {{$user = Auth::user()->email}}</span>
    </div>
  </div>
  <div class="user_link">
    <ul>
      <li><a href="{{ route('profile') }}">Thay đổi thông tin</a></li>
      <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
    </ul>
  </div>
  @else
  <form id="login_box" action="{{ route('login.action') }}" method="post">
    @csrf
    <h4>Đăng nhập</h4>
    <input type="email" placeholder="Enter mail" name="email" value="{{ old('email') }}">
    <input type="password" placeholder="Enter Password" name="password">
    <input type="submit" value="Đăng nhập">
    <a href="{{ route('register') }}">Tạo tài khoản</a>
  </form>
  @endif
  <span class="close_logn_form"><i class="fas fa-times"></i></span>
</div>
