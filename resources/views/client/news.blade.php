@extends('client/index')
@section('content')
<section class="section news_sec">
    <div class="grid-container">
        <div class="grid-66">
            <div class="section_heading">
                <div class="sec_title">
                    Tin tức
                </div>
                <div class="sec_des">
                    Cập nhật tin tức mới nhất từ chúng tôi!
                </div>
            </div>
            <div class="news_wrap">
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
                            Để chọn được một chiếc đồng hồ đeo tay nam hoặc nữ ưng ý thì cách đơn giản nhất thiết thực nhất vẫn là bạn đến trực tiếp shop để lựa chọn. Nhưng nếu như bạn ở quá xa, hoặc không có thời gian thì chúng ta phải làm thế nào? Hãy cùng tham khảo ngay cách chọn size đồng hồ thực sự phù hợp với cổ tay.
                        </div>
                        <div class="news_date">
                            <span>03/10/2022 01:28:49</span>
                            <a href="/single-news">Xem chi tiết</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="Page navigation m-auto">
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
                    @for($i = 1; $i <= $pages; $i++)
                        <li class="@if($news->currentPage() == $i)current @endif page-item">
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
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fbusiness.facebook.com%2Ftnkhoiweb&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=532133051086417" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <div class="item">
                <h4 class="item_head">
                    <i class="far fa-newspaper"></i> Danh mục tin
                </h4>
                <ul>
                    <li>
                        <div class="news">
                            @foreach($news as $new)
                            <div class="news_item">
                                <div class="news_cont">
                                    <div class="news_title">
                                        <a href="/single-news">{{$new->title}}</a>
                                    </div>
                                    <div class="news_des">
                                        {{$new->content}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </li>
                </ul>
            </div>
            <div class="item">
                <h4 class="item_head">
                    <i class="far fa-newspaper"></i> Tin xem nhiều
                </h4>
                <ul>
                    <li><a href="single-news.html">ĐỒNG HỒ CỦA BẠN CÓ ĐANG ĐƯỢC BẢO HÀNH TẠI TRUNG TÂM HÃNG?</a></li>
                    <li><a href="single-news.html">10 “CHECKLIST” GIÚP ĐỒNG HỒ TẠI S_Watch CHẤT LƯỢNG HƠN ĐỐI THỦ</a></li>
                    <li><a href="single-news.html">CÁCH ĐO, CHỌN SIZE ĐỒNG HỒ ĐEO TAY NAM, NỮ CHUẨN, DỄ HIỂU</a></li>
                    <li><a href="single-news.html">GIỚI THIỆU HỆ THỐNG SHOWROOM ĐỒNG HỒ S_Watch</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
