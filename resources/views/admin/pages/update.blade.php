@extends('layouts.admin')
@section('title')
    Cập nhật trang
@endsection
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">{{$page->name}}</h4>
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
            <div class="col-xl-10 m-auto">
                <form action="/admin/page/update/{{$page->id}}" method="post" class="m-auto">
                    <h2 class="text-center">SEO</h2>
                    <div class="seo_group" style="display: flex; flex-wrap: wrap">
                        <div class="form_parent w_33 pr-3">
                            <div class="form_group mb-3 w-33">
                                <label for="id">ID tin</label>
                                <input name="id" id="id" class="form-control" value="{{$page->id}}" readonly>
                            </div>
                            <div class="form_group mb-3">
                                <label for="name">Tên trang</label>
                                <input readonly name="name" id="name" class="form-control" value="{{$page->name}}">
                            </div>
                            <div class="form_group mb-3">
                                <label for="title">Tiêu đề SEO</label>
                                <input name="title" id="title" class="form-control" value="{{$page->title}}">
                            </div>
                        </div>
                        <div class="form_parent w_33 px-3">
                            <div class="form_group mb-3 w-33">
                                <label for="keywords">Từ khoá</label>
                                <textarea rows="8" name="keywords" id="keywords" class="form-control">{{$page->keywords}}</textarea>
                            </div>
                        </div>
                        <div class="form_group mb-3 w_33 pl-3 h-100">
                            <label for="description">Mô tả</label>
                            <textarea rows="8" name="description" id="description" class="form-control">{{$page->description}}</textarea>
                        </div>
                    </div>
                    <div class="content_group">
                        <h3 class="text-center">CONTENT</h3>
                        @foreach($page_meta as $item)
                            <div class="custom_field">
                                @switch($item->meta_type)
                                    @case('textarea')
                                        <label for="{{$item->meta_key}}"></label>
                                        <textarea class="w-100 form-control" rows="3" name="{{$item->meta_key}}" id="{{$item->meta_key}}" cols="30" rows="10">{{$item->meta_value}}</textarea>
                                        @break
                                    @case('text')
                                        <label for="{{$item->meta_key}}">{{$item->meta_label}}</label>
                                        <input type="text" class="w-100 form-control" name="{{$item->meta_key}}" id="{{$item->meta_key}}" value="{{$item->meta_value}}">
                                        @break
                                    @case('link')
                                        <div class="link_wrap">
                                            <h6>{{$item->meta_label}}</h6>
                                        </div>
                                        @break
                                    @case('image')
                                        @php $val = json_decode($item->meta_value) @endphp
                                        <div class="image_wrap" style="display: flex;flex-wrap: wrap">
                                            <h6 style="width: 100%">{{$item->meta_label}}</h6>
                                            <div class="w-50 input_wrap">
                                                <label for="title">Chọn hình ảnh</label>
                                                <input class="form-control" name="{{$item->meta_key}}_url" type="text" id="title" value="{{$val->url}}">
                                            </div>
                                            <div class="w-50 input_wrap">
                                                <label for="alt_text">Nhập alt cho ảnh</label>
                                                <input class="form-control"name="{{$item->meta_key}}_alt"  type="text" id="alt_test" value="{{$val->alt}}">
                                            </div>
                                        </div>
                                        @break
                                @endswitch
                            </div>
                        @endforeach
{{--                        --}}
{{--                        @foreach($meta_value as $item)--}}
{{--                            <div class="custom_field">--}}
{{--                                @switch($item->field_type)--}}
{{--                                    @case('textarea')--}}
{{--                                        <label for="{{$item->field_name}}">{{$item->field_label}}</label>--}}
{{--                                        <textarea class="w-100 form-control" rows="3" name="{{$item->field_name}}" id="{{$item->field_name}}" cols="30" rows="10">{{$item->value}}</textarea>--}}
{{--                                        @break--}}
{{--                                    @case('text')--}}
{{--                                        <label for="{{$item->field_name}}">{{$item->field_label}}</label>--}}
{{--                                        <input class="w-100 form-control" type="text" name="{{$item->field_name}}" value="{{$item->value}}" id="{{$item->field_name}}">--}}
{{--                                        @break--}}
{{--                                    @case('link')--}}
{{--                                        <label for="{{$item->field_name}}">{{$item->field_label}}</label>--}}
{{--                                        <input class="w-100 form-control" type="text" id="{{$item->field_name}}" name="{{$item->field_name}}" value="{{$item->value}}">--}}
{{--                                        @break--}}
{{--                                    @case('image')--}}
{{--                                        <div class="image_wrap">--}}
{{--                                            <label for="title">Chọn hình ảnh</label>--}}
{{--                                            <input class="w-100 form-control" type="text" id="title" value="{{$item->value->url}}">--}}
{{--                                            <label for="alt_text">Nhập alt cho ảnh</label>--}}
{{--                                            <input class="w-100 form-control" type="text" id="alt_test" value="{{$item->value->alt}}">--}}
{{--                                        </div>--}}
{{--                                        @break--}}
{{--                                    @case('gallery')--}}
{{--                                        @break--}}
{{--                                    @case('repeater')--}}
{{--                                        <table class="w-100">--}}
{{--                                            <tbody>--}}
{{--                                            @foreach($item->value as $vals)--}}
{{--                                                <tr>--}}
{{--                                                    @foreach($vals as $val)--}}
{{--                                                        <td>--}}
{{--                                                            @switch($val->field_type)--}}
{{--                                                                @case('textarea')--}}
{{--                                                                    <label for="{{$val->field_name}}">{{$val->field_label}}</label>--}}
{{--                                                                    <textarea class="w-100 form-control" name="{{$val->field_name}}" id="{{$val->field_name}}" cols="30" rows="10">{{$val->value}}</textarea>--}}
{{--                                                                    @break--}}
{{--                                                                @case('text')--}}
{{--                                                                    <label for="{{$val->field_name}}">{{$val->field_label}}</label>--}}
{{--                                                                    <input class="w-100 form-control" type="text" name="{{$val->field_name}}" value="{{$val->value}}" id="{{$val->field_name}}">--}}
{{--                                                                    @break--}}
{{--                                                                @case('link')--}}
{{--                                                                    <label for="{{$val->field_name}}">{{$val->field_label}}</label>--}}
{{--                                                                    <input class="w-100 form-control" type="text" id="{{$val->field_name}}" name="{{$val->field_name}}" value="{{$val->value->url}}">--}}
{{--                                                                    @break--}}
{{--                                                                @case('image')--}}
{{--                                                                    <div class="image_wrap">--}}
{{--                                                                        <label for="{{$val->field_name}}">Url hình ảnh</label>--}}
{{--                                                                        <input class="w-100 form-control" type="text" id="title" value="{{$val->value->url}}">--}}
{{--                                                                        <label for="{{$val->field_name}}">Atl text cho hình ảnh</label>--}}
{{--                                                                        <input class="w-100 form-control" type="text" id="alt_test" value="{{$val->value->alt}}">--}}
{{--                                                                    </div>--}}
{{--                                                                    @break--}}
{{--                                                            @endswitch--}}
{{--                                                        </td>--}}
{{--                                                    @endforeach--}}
{{--                                                </tr>--}}
{{--                                            @endforeach--}}
{{--                                            </tbody>--}}

{{--                                        </table>--}}
{{--                                        @break--}}
{{--                                @endswitch--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                    </div>
                    <div class="form_group w-100">
                        <button type="submit" class="bg-success p-2">Cập nhật</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
