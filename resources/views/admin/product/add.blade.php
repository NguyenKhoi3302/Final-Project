@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 style="text-align: center" class="header-title m-t-0 m-b-30">THÊM MỚI SẢN PHẨM</h4>
            <div class="row">
                <div class="col">
                    <form action="{{url('admin/product/save')}}" method="post" enctype="multipart/form-data"
                        id="frm-add-product" class="frm-add-product">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label style=" color: red;" for="exampleInputEmail1">* TÊN SẢN PHẨM</label>
                                        <input required type="text" name="name" autofocus class="form-control"
                                            id="exampleInputEmail1" placeholder="Nhập tên sản phẩm">
                                    </fieldset>
                                </div>
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label style=" color: red;" for="exampleInputEmail1">* NHÓM SẢN PHẨM</label>
                                        <select name="pr_category_id" class="custom-select mb-3">
                                            <option selected>Chọn Tại Đây...</option>
                                            @foreach($categorys as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label style=" color: red;" for="exampleInputEmail1">* THƯƠNG HIỆU</label>
                                        <select name="brand_id" class="custom-select mb-3">
                                            <option selected>Chọn Tại Đây...</option>
                                            @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">* GIÁ (VND)</label>
                                        <input required type="number" name="price" onkeyup="calculatePrice()"
                                            class="form-control currency money_format ">
                                    </fieldset>
                                </div>
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">* GIẢM GIA (%)</label>
                                        <input required type="number" name="discount" onkeyup="calculatePrice()"
                                            class="form-control number_format">
                                    </fieldset>
                                </div>
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">* GIÁ SAU KHI GIẢM (VND)</label>
                                        <input required type="number" name="price_pay" class="form-control money_pay">
                                    </fieldset>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">* MÔ TẢ SẢN PHẨM</label>
                                        <textarea name="description" id="description" rows="10" class="form-control"></textarea>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">* NỘI DUNG SẢN PHẨM</label>
                                        <textarea name="contents" id="content" rows="10" class="form-control"></textarea>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">* ẢNH ĐẠI DIỆN</label>
                                        <input required class="form-control form-control-sm" id="formFileSm"
                                            name="images" type="file">
                                    </fieldset>
                                </div>
                                <div class="col">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">* TỪ KHÓA SEO</label>
                                        <input type="text" name="keywords" class="form-control">
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
<script src="https://cdn.tiny.cloud/1/uia8on2oc5ua75809jee46xcvbpkgb46y5e3bzw1hm6et9wc/tinymce/5/tinymce.min.js">
</script>
<script src="{{url('assets')}}/cutstom-js/product.js"></script>
<script>
    if($("textarea#description").length){
        ClassicEditor
            .create( document.querySelector( 'textarea#description' ) )
            .catch( error => {
                console.error( error );
            } );
    }
    $(document).ready(function () {

            @if (Session::has('msg'))
            toastr.success('{{ Session::get('msg') }}');
            @elseif(Session::has('success'))
            toastr.error('{{ Session::get('success') }}');
            @endif
        });

</script>
@endpush
