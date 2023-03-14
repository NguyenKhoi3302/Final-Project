@foreach($footer['footer_meta'] as $item)
    @switch($item->meta_key)
        @case('logo_page')
            @php $logo_page = json_decode($item->meta_value) @endphp
            @break
        @case('address_footer')
            @php $address_footer = $item->meta_value @endphp
            @break
        @case('phone_footer')
            @php $phone_footer = $item->meta_value @endphp
            @break
        @case('fax_footer')
            @php $fax_footer = $item->meta_value @endphp
            @break
        @case('email_footer')
            @php $email_footer = $item->meta_value @endphp
            @break
        @case('copyright')
            @php $copyright = $item->meta_value @endphp
            @break
        @case('social_footer')
            @php $social_footer = json_decode($item->meta_value) @endphp
            @break
        @case('choose_link_footer')
            @php $choose_link_footer = json_decode($item->meta_value) @endphp
            @break
    @endswitch
@endforeach
<div class="inside_footer grid-container">
  <div class="footer_main">
    <div class="footer_top">
      <div class="footer_logo">
        <img src="{{asset('images/logo/page_logo_2.png')}}" alt="">
      </div>
      <div class="footer_info">
        <p>
          <strong>Địa chỉ:</strong>
          <a href="javascript:void(0);">
              {{$address_footer}}
          </a>
        </p>
        <p>
          <strong>Số điện thoại:</strong>
          <a href="tel:0854643848">{{$phone_footer}}</a>
        </p>
        <p>
          <strong>Fax:</strong>
          <span>{{$fax_footer}}</span>
        </p>
        <p>
          <strong>Email:</strong>
          <a href="mailto:{{$email_footer}}">{{$email_footer}}</a>
        </p>
      </div>
      <div class="footer_map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4607203898763!2d106.62490081424649!3d10.852520060753443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b161f50ae47%3A0x2328d1d1acc3b11a!2sFPT%20Polytechnic%20-%20T%C3%B2a%20F!5e0!3m2!1svi!2s!4v1671463256338!5m2!1svi!2s"
          width="400" height="160" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="item">
        <div class="title">
          Liên kết nhanh
        </div>
        <ul>
            @foreach($choose_link_footer as $val)
                @foreach($val as $link)
                  <li>
                      <a href="{{$link->child_value->url}}" target="{{$link->child_value->target}}">
                          {{$link->child_value->title}}
                      </a>
                  </li>
                @endforeach
            @endforeach
        </ul>
      </div>
      <div class="item">
        <div class="title">
          Danh mục sản phẩm
        </div>
        <ul>
            @foreach($footer['pd_cat_footer'] as $val)
                <li><a href="/danh-muc-tin-tuc/{{$val->id}}">{{$val->name}}</a></li>
            @endforeach
        </ul>
      </div>
      <div class="item">
        <div class="title">
          Danh mục tin tức
        </div>
        <ul>
            @foreach($footer['news_cat_footer'] as $val)
              <li><a href="/danh-muc-san-pham/{{$val->id}}">{{$val->name}}</a></li>
            @endforeach
        </ul>
      </div>
      <div class="item social_wrap">
          @foreach($social_footer as $item)
                <div class="social">
                  <a href="{{$item[1]->child_value->url}}" target="{{$item[1]->child_value->target}}" title="{{$item[1]->child_value->title}}">
                      <img src="{{asset($item[0]->child_value->url)}}" alt="">
                  </a>
                </div>
          @endforeach
      </div>
    </div>
  </div>
  <div class=" section copyright_wrap">
    <div class="copyright">
        {{$copyright}}
    </div>
  </div>
</div>
