@extends('layouts.admin')
@section('title')
    Danh mục tin tức
@endsection
@section('admin_content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Danh mục tin tức</h4>

                    {{--                    <ol class="breadcrumb float-right">--}}
                    {{--                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>--}}
                    {{--                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>--}}
                    {{--                        <li class="breadcrumb-item active">Dashboard</li>--}}
                    {{--                    </ol>--}}

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-8 m-auto">
                <h1 class="text-center">Thêm danh mục mới</h1>
                <form action="/admin/category/update/{{$cat->id}}" method="post" class="m-auto">
                    <div class="form_group mb-3">
                        <label for="name">Tên danh mục</label>
                        <input name="name" id="name" class="form-control title_input" value="{{$cat->name}}">
                    </div>
                    <div class="form_group mb-3">
                        <label for="slug">Liên kết</label>
                        <input name="slug" id="slug" class="form-control slug_output" value="{{$cat->slug}}">
                    </div>
                    <div class="form_group mb-3">
                        <label for="appear">Hiện</label>
                        <input type="radio" name="appear" id="hide" value="1" @if($cat->appear == 1) checked @endif>
                        <label for="appear">Ẩn</label>
                        <input type="radio" name="appear" id="appear" value="0" @if($cat->appear == 0) checked @endif>
                    </div>
                    <div class="form_group">
                        <button type="submit" class="bg-success p-2">Cập nhật</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>

    </div> <!-- container -->
@endsection
