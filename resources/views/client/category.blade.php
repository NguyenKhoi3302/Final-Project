@extends('layouts.guest')
@section('content')
<section class="section news_sec">
    <div class="grid-container">
        <div class="grid-66">
            <div class="section_heading">
                <div class="sec_title">
                    Danh mục tin tức
                </div>
                <div class="sec_des">
                    Cập nhật tin tức mới nhất từ chúng tôi!
                </div>
            </div>
            <div class="news_wrap">
                {{-- Lấy tin tức--}}
                @foreach($news_cat as $new)
                <div class="news_item">
                    <div class="news_cont">
                        <div class="news_title">
                            <a href="/single-news">{!!$new->id!!}</a>
                        </div>
                        <div class="news_des">
                            {!!$new->name!!}
                        </div>
                        <div class="news_date">
                            <span>{!!$new->created_at!!}</span>
                            <a href="/single-news">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="news_item">
                    <div class="img_wrap">
                        <a href="/single-news">
                            <img src="images/news/news_3.jpg" alt="">
                        </a>
                    </div>
                    <div class="news_cont">
                        <div class="news_title">
                            <a href="/single-news">CÁCH ĐO, CHỌN SIZE ĐỒNG HỒ ĐEO TAY NAM, NỮ CHUẨN, DỄ HIỂU</a>
                        </div>
                        <div class="news_des">
                            Để chọn được một chiếc đồng hồ đeo tay nam hoặc nữ ưng ý thì cách đơn giản nhất thiết thực
                            nhất vẫn là bạn đến trực tiếp shop để lựa chọn. Nhưng nếu như bạn ở quá xa, hoặc không có
                            thời gian thì chúng ta phải làm thế nào? Hãy cùng tham khảo ngay cách chọn size đồng hồ thực
                            sự phù hợp với cổ tay.
                        </div>
                        <div class="news_date">
                            <span>03/10/2022 01:28:49</span>
                            <a href="/single-news">Xem chi tiết</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- Phân trang--}}
            <div class="Page pagination m-auto">
                <?php
                $total = $list_news->total();
                $pages = ceil($total / $list_news->perPage());
                ?>
                <ul class="pagination">
                    <li class="prev page-item">
                        <a class="page-link" href="{{$list_news->previousPageUrl()}}">
                            <i class="zmdi zmdi-chevron-left"></i>
                        </a>
                    </li>
                    @for($i = 1; $i <= $pages; $i++) <li
                        class="@if($list_news->currentPage() == $i)current @endif page-item">
                        <a class="page-link" @if($list_news->currentPage() != $i)href="{{$list_news->url($i)}}" @endif>
                            {{$i}}
                        </a>
                        </li>

                        @endfor
                        <li class="next page-item">
                            <a class="page-link" href="{{$list_news->nextPageUrl()}}">
                                <i class="zmdi zmdi-chevron-right"></i>

                            </a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="grid-30">
            <div class="item">
                <h4 class="item_head">
                    <i class="far fa-newspaper"></i> Danh mục tin
                </h4>
                <ul>
                    @foreach($news_cat as $item)
                    <li>
                        <a href="/danh-muc-tin-tuc/{{$item->slug}}">{{$item->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection