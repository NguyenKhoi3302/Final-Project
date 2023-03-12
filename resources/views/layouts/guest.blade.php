<!doctype html>
<html lang="en">

<head>
  @include('client.layouts.head')
</head>

<body>
    <header class="site_header">
        @include('client.layouts.navbar')
    </header>
    <div class="site_body grid-container">
        <div class="site_content">
            @if(!Request::is('/') && !Request::is('contact'))
                <section class="section banner_img">
                    <img src="{{asset('images/banner/banner_1.jpg')}}" alt="">
                </section>
            @endif
            @yield('content')
        </div>
    </div>
    <footer class="site_footer">
        @include('client.layouts.footer')
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
