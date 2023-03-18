@extends('layouts.admin')
@section('title')
Danh sách đơn hàng
@endsection
@section('admin_content')
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left">Danh sách đơn hàng</h4>

                {{-- <ol class="breadcrumb float-right">--}}
                    {{-- <li class="breadcrumb-item"><a href="#">Uplon</a></li>--}}
                    {{-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li>--}}
                    {{-- <li class="breadcrumb-item active">Dashboard</li>--}}
                    {{-- </ol>--}}

                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- end row -->
    <div class="card">
        <div class="card-header">
            <strong>Tìm kiếm tin tức</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select id="status" name="status" class="form-control">
                            <option value="">Tất Cả Trạng Thái</option>
                            <option value="Đang Chờ Duyệt">Đang Chờ Duyệt</option>
                            <option value="Đang giao hàng">Đang Giao Hàng</option>
                            <option value="Giao thành công">Giao Thành Công</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select id="arrange" name="arrange" class="form-control">
                            <option value="">Tất cả thời gian đăt hàng</option>
                            <option value="newest">Đơn Hàng Mới Nhất</option>
                            <option value="oldest">Đơn Hàng Cũ Nhất</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" >
                        <input style="text-align: center" type="text" id="code" class="form-control" placeholder="Nhập mã đơn hàng">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
            <table class="table table-bordered mb-0 news_table">
                <thead>
                    <tr>
                        <th><span>ID</span></th>
                        <th><span>ID người mua</span></th>
                        <th><span>Tên</span></th>
                        <th><span>Số điện thoại</span></th>
                        <th><span>Địa chỉ</span></th>
                        {{-- <th><span>Tóm tắt</span></th>--}}
                        <th><span>Mã đơn hàng</span></th>
                        <th><span>Trạng thái</span></th>
                        <th><span>Ghi chú khách</span></th>
                        <th><span>Ghi chú admin</span></th>
                        <th><span>Tổng</span></th>
                        <th><span>Ngày tạo</span></th>
                        <th><span>Hành động</span></th>
                    </tr>
                </thead>
                <tbody id="body-load-order">
                    @foreach($list as $item)
                    <tr>
                        <th class="text-muted">{{$item->id}}</th>
                        <td>{{$item->user_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->code}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->note}}</td>
                        <td>{{$item->admin_note}}</td>
                        <td>{{$item->total}}</td>
                        <td>
                            <span class="w_content">
                                {{date('H:i:s d-m-Y', strtotime($item->created_at))}}
                            </span>
                        </td>
                        <td>
                            <button class="w_content label-success text-white border-0">
                                <a href="/admin/order/detail/{{$item->id}}">Xem chi tiết</a>
                            </button>
                        </td>
                        {{-- <td class="text-center">--}}
                            {{-- <a class="mr-3" href="{{url('admin/news/update/'.$news->id)}}">--}}
                                {{-- <i class="zmdi zmdi-edit" style="font-size: 20px"></i>--}}
                                {{-- </a>--}}
                            {{-- <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')"
                                href="{{url('admin/news/delete/'.$news->id)}}">--}}
                                {{-- <i class="zmdi zmdi-delete" style="font-size: 20px"></i>--}}
                                {{-- </a>--}}
                            {{-- </td>--}}
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row mt-3">
                <div class="Page navigation m-auto">
                    <?php
                        $total = $list->total();
                        $pages = ceil($total / $list->perPage());
                        ?>
                    <ul class="pagination">
                        <li class="prev page-item">
                            <a class="page-link" href="{{$list->previousPageUrl()}}">
                                <i class="zmdi zmdi-chevron-left"></i>
                            </a>
                        </li>
                        @for($i = 1; $i <= $pages; $i++) <li
                            class="@if($list->currentPage() == $i)current @endif page-item">
                            <a class="page-link" @if($list->currentPage() != $i)href="{{$list->url($i)}}" @endif>
                                {{$i}}
                            </a>
                            </li>

                            @endfor
                            <li class="next page-item">
                                <a class="page-link" href="{{$list->nextPageUrl()}}">
                                    <i class="zmdi zmdi-chevron-right"></i>

                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row mt-3">--}}
        {{-- <div class="Page navigation m-auto">--}}
            {{--
            <?php--}}
{{--                $total = $news_list->total();--}}
{{--                $pages = ceil($total / $news_list->perPage());--}}
{{--                ?>--}}
            {{-- <ul class="pagination">--}}
                {{-- <li class="prev page-item">--}}
                    {{-- <a class="page-link" href="{{$news_list->previousPageUrl()}}">--}}
                        {{-- <i class="zmdi zmdi-chevron-left"></i>--}}
                        {{-- </a>--}}
                    {{-- </li>--}}
                {{-- @for($i = 1; $i <= $pages; $i++)--}} {{-- <li
                    class="@if($news_list->currentPage() == $i)current @endif page-item">--}}
                    {{-- <a class="page-link" @if($news_list->currentPage() != $i)href="{{$news_list->url($i)}}"
                        @endif>--}}
                        {{-- {{$i}}--}}
                        {{-- </a>--}}
                    {{-- </li>--}}

                    {{-- @endfor--}}
                    {{-- <li class="next page-item">--}}
                        {{-- <a class="page-link" href="{{$news_list->nextPageUrl()}}">--}}
                            {{-- <i class="zmdi zmdi-chevron-right"></i>--}}

                            {{-- </a>--}}
                        {{-- </li>--}}
                    {{-- </ul>--}}
            {{--
        </div>--}}
        {{-- </div>--}}

</div> <!-- container -->
@endsection
@push('js')
    <script src="{{url('assets')}}/cutstom-js/order.js"></script>

@endpush
