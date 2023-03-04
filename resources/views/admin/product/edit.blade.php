@extends('layouts.admin')
@section('admin_content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 style="text-align: center" class="header-title m-t-0 m-b-30">CẬP NHẬT SẢN PHẨM SẢN PHẨM</h4>
                <div class="row">
                    <div class="col">
                        <form action="{{url('admin/product/update/save',$product->id )}}" method="post" enctype="multipart/form-data"
                              id="frm-add-product" class="frm-add-product">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label style=" color: red;" for="exampleInputEmail1">* TÊN SẢN PHẨM</label>
                                            <input required type="text" value="{{$product->name}}" name="name" autofocus class="form-control"
                                                   id="exampleInputEmail1" placeholder="Nhập tên sản phẩm">
                                        </fieldset>
                                    </div>
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label style=" color: red;" for="exampleInputEmail1">* NHÓM SẢN PHẨM</label>
                                            <select name="category_id" class="custom-select mb-3">
                                                <option selected>chọn tại đây...</option>
                                                @foreach($categorys as $category)
                                                    <option   {{$product->category_id == $category->id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label style=" color: red;" for="exampleInputEmail1">* THƯƠNG HIỆU</label>
                                            <select name="brand_id" class="custom-select mb-3">
                                                <option selected>chọn tại đây...</option>
                                                @foreach($brands as $brand)
                                                    <option {{$product->brand_id == $brand->id ? 'selected' : '' }}  value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">* GIÁ (VND)</label>
                                            <input required value="{{$product->price}}" type="number" name="price" onkeyup="calculatePrice()"
                                                   class="form-control currency money_format ">
                                        </fieldset>
                                    </div>
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">* GIẢM GIA (%)</label>
                                            <input required type="number" value="{{$product->discount}}" name="discount"   onkeyup="calculatePrice()"
                                                   class="form-control number_format">
                                        </fieldset>
                                    </div>
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">* GIÁ SAU KHI GIẢM (VND)</label>
                                            <input required type="number" value="{{$product->price_pay}}" name="price_pay"
                                                   class="form-control money_pay">
                                        </fieldset>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">* MÔ TẢ SẢN PHẨM</label>
                                            <textarea class="c-tinymce" name="description" rows="5">{{$product->description}}</textarea>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">* NỘI DUNG SẢN PHẨM</label>
                                            <textarea class="c-tinymce" name="contents" rows="5">{{$product->contents}}</textarea>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">* ẢNH ĐẠI DIỆN</label>
                                            <input  class="form-control form-control-sm" id="formFileSm" name="images"
                                                   type="file">
                                            <img src="{{asset($product->images)}}" width="100px" alt="">
                                        </fieldset>
                                    </div>
                                    <div class="col">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">* SẢN PHẨM DÀNH CHO</label>
                                            <div style="padding-top: 10px" class="row">
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input {{ $product->sex == 1 ? 'checked' : '' }} class="form-check-input" type="radio" name="sex"
                                                               id="gender_1" value="1">
                                                        <label class="form-check-label" for="gender_1">
                                                            Nam
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input {{ $product->sex == 2 ? 'checked' : '' }} class="form-check-input" type="radio" name="sex"
                                                               id="gender_2" value="2">
                                                        <label class="form-check-label" for="gender_2">
                                                            Nữ
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input {{ $product->sex == 0 ? 'checked' : '' }} class="form-check-input" type="radio" name="sex"
                                                               id="gender_0" value="0" >
                                                        <label class="form-check-label" for="gender_0">
                                                            Nam và Nữ
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
                                <button type="reset" class="btn btn-danger waves-effect waves-light">Resets</button>
                                <button type="submit" class="btn btn-primary">XÁC NHẬN</button>

                            </div>
                        </form>
                    </div><!-- end col -->

                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>
@endsection
@push('js')
    <script src="https://cdn.tiny.cloud/1/uia8on2oc5ua75809jee46xcvbpkgb46y5e3bzw1hm6et9wc/tinymce/5/tinymce.min.js"></script>
    <script src="{{url('assets')}}/cutstom-js/product.js"></script>
    <script>
        $(document).ready(function () {
            @if (Session::has('msg'))
            toastr.success('{{ Session::get('msg') }}');
            @elseif(Session::has('success'))
            toastr.error('{{ Session::get('success') }}');
            @endif
        });
        tinymce.init({
            selector: 'textarea.c-tinymce',
            plugins: 'code print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen | link image media | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
            image_advtab: true,
            height: 400,
            //local upload
            images_upload_handler: function (blobInfo, success, failure) {
                var xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.withCredentials = true;
                xhr.open('POST', '{{url('admin/tinymce/upload')}}');

                xhr.onload = function() {
                    var json;

                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }

                    success(json.location);
                };

                formData = new FormData();
                formData.append('_token', '{{csrf_token()}}');
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                xhr.send(formData);
            },
        });
    </script>
@endpush


