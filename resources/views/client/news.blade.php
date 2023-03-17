@extends('layouts.guest')
@section('description'){{$page->description}}@endsection
@section('title'){{$page->title}}@endsection
@section('keywords'){{$page->keywords}}@endsection
@foreach ($page_meta as $val)
    @switch($val->meta_key)
        @case('link_fanpage')
            @php $link_fanpage = $val->meta_value @endphp
            @break
        @case('news_page_title')
            @php $news_page_title = $val->meta_value @endphp
            @break
        @case('news_page_des')
            @php $news_page_des = $val->meta_value @endphp
            @break
    @endswitch
@endforeach
@section('content')
<section class="section news_sec">
    <div class="grid-container">
        <div class="grid-66">
            <div class="section_heading">
                <div class="sec_title">
                    {{$news_page_title}}
                </div>
                <div class="sec_des">
                    {{$news_page_des}}
                </div>
            </div>
            <div class="news_wrap">
                {{-- Lấy tin tức--}}
                @foreach($news as $new)
                    <div class="news_item">
                        <div class="img_wrap">
                            <a href="/single-news/{{$new->id}}">
                                <img src="{{$new->image}}" alt="">
                            </a>
                        </div>
                        <div class="news_cont">
                            <div class="news_title">
                                <a href="/single-news">{{$new->title}}</a>
                            </div>
                            <div class="news_des">
                                {{$new->content}}
                            </div>
                            <div class="news_date">
                                <span>{{$new->created_at}}</span>
                                <a href="/single-news">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- Phân trang--}}
            <div class="Page pagination m-auto">
                <?php
                $total = $news->total();
                $pages = ceil($total / $news->perPage());
                ?>
                <ul class="pagination">
                    <li class="prev page-item">
                        <a class="page-link" href="{{$news->previousPageUrl()}}">
                            <i class="zmdi zmdi-chevron-left"></i>
                        </a>
                    </li>
                    @for($i = 1; $i <= $pages; $i++) <li
                        class="@if($news->currentPage() == $i)current @endif page-item">
                        <a class="page-link" @if($news->currentPage() != $i)href="{{$news->url($i)}}" @endif>
                            {{$i}}
                        </a>
                        </li>

                        @endfor
                        <li class="next page-item">
                            <a class="page-link" href="{{$news->nextPageUrl()}}">
                                <i class="zmdi zmdi-chevron-right"></i>

                            </a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="grid-30">
            <iframe
                src="{{$link_fanpage}}"
                width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <div class="item">
                <h4 class="item_head">
                    <i class="far fa-newspaper"></i> Danh mục tin
                </h4>
                <ul>
                    @foreach($cat as $item)
                    <li>
                        <a href="/danh-muc-tin-tuc/{{$item->slug}}">{{$item->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="item">
                <h4 class="item_head">
                    <i class="far fa-newspaper"></i> Tin xem nhiều
                </h4>
                <ul>
                    @foreach($hot_news as $item)
                        <li>
                            <a href="single-news/{{$item->id}}">
                                {{$item->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
