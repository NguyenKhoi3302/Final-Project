@extends('layouts.admin')
@section('admin_content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title" style="text-align: center">THƯƠNG HIỆU SẢN PHẨM</h4>
                <hr>
                <div style="padding-bottom: 10px">

                    <button data-toggle="modal" data-target="#modal-add-brand"
                            class="btn btn-success waves-effect waves-light btn-sm"><i
                            class="zmdi zmdi-plus-circle"></i> Thêm thương hiệu
                    </button>
                </div>
                @if(count($data) > 0)
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>TÊN THƯƠNG HIỆU</th>
                            <th style="text-align: center">TRẠNG THÁI</th>
                            <th style="text-align: center">THỜI GIAN TẠO</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                @if($item->appear === 1)
                                    <td style="text-align: center"><a
                                            href="{{url('admin/brand/changeStatus',$item->id)}}"><span
                                                class="label label-success">active</span></a></td>
                                @elseif($item->appear === 0)
                                    <td style="text-align: center"><a
                                            href="{{url('admin/brand/changeStatus',$item->id)}}"><span
                                                class="label label-danger">inactive</span></a></td>
                                @endif
                                <td style="text-align: center"><?= date("H:i d-m-Y", strtotime($item->created_at)) ?></td>
                                <td style="text-align: right">
                                    <a onclick="delete_brand({{$item->id}})" data-toggle="modal"
                                       data-target="#modal-delete-brand">
                                        <button class="btn waves-effect waves-light btn-danger disabled"><i
                                                class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    <a onclick="update_brand({{$item->id}})" data-name="{{$item->name}}"
                                       id="update_brand" data-toggle="modal" data-target="#modal-update-brand">
                                        <button class="btn waves-effect waves-light btn-warning">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-warning" role="alert">
                        Chưa có dữ liệu phù hợp
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{url('assets')}}/cutstom-js/brand.js"></script>
    <script>
        $(document).ready(function () {
            @if (Session::has('msg'))
            toastr.success('{{ Session::get('msg') }}');
            @elseif(Session::has('success'))
            toastr.error('{{ Session::get('success') }}');
            @endif
        });
    </script>

@endpush
@push('modal')
    <div id="modal-add-brand" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel">THÊM THƯƠNG HIỆU SẢN PHẨM</h5>
                </div>
                <form action="{{url('admin/brand/save')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">Tiêu đề</label>
                            <input type="text" name="name" class="form-control" autofocus required/>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- popup add category   --}}
    <div id="modal-delete-brand" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel">XÁC NHẬN</h5>
                </div>
                <div class="modal-body">
                    <form action="{{url('admin/brand/delete')}}" method="post">
                        @csrf
                        <input type="hidden" name="item_id" class="item_id">
                        <P>Bạn có xác nhân muốn xóa danh mục này không? </P>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- popup add category   --}}

    <div id="modal-update-brand" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel">CẬP NHẬT DANH MỤC</h5>
                </div>
                <form action="{{url('admin/brand/update')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <fieldset class="form-group">
                            <input type="hidden" name="item_id" class="item_id">
                            <label for="exampleInputPassword1">Tiêu đề</label>
                            <input type="text" name="name" class="form-control" autofocus required/>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- popup add category   --}}
@endpush

