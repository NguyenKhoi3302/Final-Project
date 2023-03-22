<?php

if (!isset($products_load) || !count($products_load)) {
    return;
}
?>

@foreach($products_load as $item)
    <tr>
        <td><a href="">{{$item->product_name}}</a></td>
        <td style="text-align: center "><img src="{{asset($item->images)}}" alt="" width="50px">
        </td>
        <td style="text-align: center ">{{$item->brand_name}}</td>
        <td style="text-align: center ">{{$item->cate_name}}</td>
        <td style="text-align: center ">
            <div class="row">
                            <span style=" text-decoration: line-through;" class="col">
                                <?= number_format($item->price, 0, ',', '.') . "đ"; ?>
                            </span>
            </div>
            <div class="row">
                            <span  class="col">
                                <?= number_format($item->price_pay, 0, ',', '.') . "đ"; ?>
                            </span>
            </div>
        </td>
        <td style="text-align: center ">{{$item->bought}}</td>
        <td style="text-align: center ">{{$item->view}}</td>
        @if($item->appear === 1)
            <td style="text-align: center">
                <div class="mb-1">
                    <a  href="{{url('admin/product/changeStatus',$item->id)}}"><span
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
               class="btn waves-effect btn-secondary"
               href="{{url('admin/product/attributes', $item->id)}}">
                <i class="zmdi zmdi-plus-circle"></i>
            </a>
            <a onclick="delete_product({{$item->id}})" data-toggle="modal"
               data-target="#modal-delete-product">
                <button title="xóa" data-original-title="xóa"
                        class="btn waves-effect waves-light btn-danger disabled"><i
                        class="zmdi zmdi-delete"
                        aria-hidden="true"></i>
                </button>
            </a>
            <a href="{{ url('admin/product/update', $item->id) }}" target="_blank" title="sửa"
               class="btn waves-effect waves-light btn-warning">
                <i class="fa fa-pencil"></i>
            </a>
        </td>
    </tr>
@endforeach
