@extends('admin.layouts.admin')
@section('admin_content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title" style="text-align: center">DANH SÁCH SẢN PHẨM</h4>
                <hr>
                <div style="padding-bottom: 10px">
                    <a href="{{url('admin/product/add')}}">
                        <button data-toggle="modal" data-target="#modal-add-category"
                                class="btn btn-success waves-effect waves-light btn-sm"><i
                                class="zmdi zmdi-plus-circle"></i> Thêm sản phẩm
                        </button>
                    </a>

                </div>

            </div>
            @if(count($data) > 0)
                <div style="text-align: right">
                    <span>Tổng sản phẩm: <?= count($data) ?></span>
                </div>
                <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>TÊN SẢN PHẨM</th>
                        <th style="text-align: center">ẢNH ĐẠI DIỆN</th>
                        <th style="text-align: center">THƯƠNG HIỆU</th>
                        <th style="text-align: center">DANH MỤC</th>
                        <th style="text-align: center">GIÁ BÁN</th>
                        <th style="text-align: center">ĐÃ MUA</th>
                        <th style="text-align: center">ĐÃ XEM</th>
                        <th style="text-align: center">TRẠNG THÁI</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td><a href="">{{$item->name}}</a></td>
                            <td style="text-align: center "><img src="{{asset($item->images)}}" alt="" width="50px">
                            </td>
                            <td style="text-align: center ">{{$item->brand_name}}</td>
                            <td style="text-align: center ">{{$item->cate_name}}</td>
                            <td style="text-align: center ">
                                <div class="row">
                                          <span class="col">
                                                 <?= number_format($item->price, 0, ',', '.') . "đ"; ?>
                                        </span>
                                </div>
                                <div class="row">
                                        <span style=" text-decoration: line-through;" class="col">
                                                 <?= number_format($item->price_pay, 0, ',', '.') . "đ"; ?>
                                        </span>
                                </div>
                            </td>
                            <td style="text-align: center ">{{$item->bought}}</td>
                            <td style="text-align: center ">{{$item->view}}</td>
                            @if($item->appear === 1)
                                <td style="text-align: center">
                                    <div class="mb-1">
                                        <a
                                            href="{{url('admin/product/changeStatus',$item->id)}}"><span
                                                class="label label-success"><i
                                                    class="ion-checkmark"></i> đang bán</span></a>
                                    </div>

                                </td>
                            @elseif($item->appear === 0)
                                <td style="text-align: center"><a
                                        href="{{url('admin/product/changeStatus',$item->id)}}"><span
                                            class="label label-danger"><i class="ion-locked"></i> tạm dừng</span></a>
                                </td>
                            @endif

                            <td style="text-align: right">
                                <a title="thêm thuộc tính" data-original-title="thêm thuộc tính"
                                   class="btn waves-effect btn-secondary" href="{{url('admin/product/attributes', $item->id)}}">
                                    <i
                                        class="zmdi zmdi-plus-circle"></i>
                                </a>
                                <a onclick="delete_product({{$item->id}})" data-toggle="modal"
                                   data-target="#modal-delete-product">
                                    <button title="xóa" data-original-title="xóa"
                                            class="btn waves-effect waves-light btn-danger disabled"><i
                                            class="zmdi zmdi-delete" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <a href="{{ url('admin/product/update', $item->id) }}" target="_blank" title="sửa" class="btn waves-effect waves-light btn-warning">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{--                    <nav>--}}
                {{--                        <ul class="pagination pagination-split">--}}
                {{--                            <li class="page-item">--}}
                {{--                                {{ $data->links() }}--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </nav>--}}

            @else
                <div class="alert alert-warning" role="alert">
                    Chưa có dữ liệu phù hợp
                </div>
            @endif

            <div class="row mt-3">
                <div class="Page navigation m-auto">
                    <?php
                    $total = $data->total();
                    $pages = ceil($total / $data->perPage());
                    ?>
                    <ul class="pagination">
                        <li class="prev page-item">
                            <a class="page-link" href="{{$data->previousPageUrl()}}">
                                <i class="zmdi zmdi-chevron-left"></i>
                            </a>
                        </li>
                        @for($i = 1; $i <= $pages; $i++)
                            <li class="@if($data->currentPage() == $i)current @endif page-item">
                                <a class="page-link" @if($data->currentPage() != $i)href="{{$data->url($i)}}" @endif>
                                    {{$i}}
                                </a>
                            </li>

                        @endfor
                        <li class="next page-item">
                            <a class="page-link" href="{{$data->nextPageUrl()}}">
                                <i class="zmdi zmdi-chevron-right"></i>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('js')
    <script src="{{url('assets')}}/cutstom-js/product.js"></script>
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
    <div id="modal-delete-product" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel">XÁC NHẬN</h5>
                </div>
                <div class="modal-body">
                    <form action="{{url('admin/product/delete')}}" method="post">
                        @csrf
                        <input type="hidden" name="item_id" class="item_id">
                        <P>Bạn có xác nhân muốn xóa sản phẩm này không? </P>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush

