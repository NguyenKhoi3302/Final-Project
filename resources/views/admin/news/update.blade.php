@extends('admin.layouts.admin')
@section('title')
    Danh sách tin tức
@endsection
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Tin tức</h4>

                    {{--                    <ol class="breadcrumb float-right">--}}
                    {{--                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>--}}
                    {{--                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>--}}
                    {{--                        <li class="breadcrumb-item active">Dashboard</li>--}}
                    {{--                    </ol>--}}

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 m-auto">
                <h1 style="text-align: center; margin: 20px 0">Sửa tin tức</h1>
                <form action="/admin/news/update/{{$news->id}}" method="post" class="m-auto">
                    <div class="form_group mb-3">
                        <label for="title">ID tin</label>
                        <input name="title" id="title" class="form-control" value="{{$news->id}}" readonly>
                    </div>
                    <div class="form_group mb-3">
                        <label for="title">Tiêu đề tin</label>
                        <input name="title" id="title" class="form-control" value="{{$news->title}}">
                    </div>
                    <div class="form_group mb-3">
                        <label for="image">Link hình ảnh</label>
                        <input name="image" id="image" class="form-control" value="{{$news->image}}">
                    </div>
                    <div class="form_group mb-3">
                        <label for="summary">Tóm tắt</label>
                        <textarea name="summary" id="summary" class="form-control">{{$news->summary}}</textarea>
                    </div>
                    <div class="form_group mb-3">
                        <label for="content">Nội dung tin</label>
                        <textarea name="content" id="content" rows="10" class="form-control">{{$news->content}}</textarea>
                    </div>
                    <div class="form_group mb-3">
                        <label for="category_id">Loại tin</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($cat as $item)
                                <option value="{{$item->id}}" @if($item->id == $news->category_id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_group mb-3">
                        <label for="hot">Tin nổi bật</label>
                        <input type="radio" name="hot" id="hot" value="1" @if($news->hot == 1) checked @endif>
                        <label for="not_hot">Không nổi bật</label>
                        <input type="radio" name="hot" id="not_hot" value="0" @if($news->hot == 0) checked @endif>
                    </div>
                    <div class="form_group mb-3">
                        <label for="appear">Hiện</label>
                        <input type="radio" name="appear" id="hide" value="1" @if($news->appear == 1) checked @endif>
                        <label for="appear">Ẩn</label>
                        <input type="radio" name="appear" id="appear" value="0" @if($news->appear == 0) checked @endif>
                    </div>
                    <div class="form_group">
                        <button type="submit" class="bg-success p-2">Thêm tin</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
