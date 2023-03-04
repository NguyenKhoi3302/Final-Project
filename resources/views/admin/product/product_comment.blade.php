@extends('layouts.admin')
@section('admin_content')
<div class="row">
  <div class="col-12">
    <div class="card-box table-responsive">
      <h4 class="m-t-0 header-title" style="text-align: center">BÌNH LUẬN SẢN PHẨM</h4>
      <hr>
      @if(count($productComments) > 0)
      <table class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th style="text-align: center">NỘI DUNG</th>
            <th>TÁC GIẢ</th>
            <th>SẢN PHẨM</th>
            <th style="text-align: center">TRẠNG THÁI</th>
            <th style="text-align: center; width: 15%">THỜI GIAN TẠO</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($productComments as $productComment)
          <tr>
            <td>{{$productComment->message}}</td>
            <td>{{$productComment->user->name}}</td>
            <td>{{$productComment->product->name}}</td>
            @if($productComment->appear === 1)
            <td style="text-align: center">
              <a href="{{url('admin/brand/changeStatus',$productComment->id)}}"><span
                  class="label label-success">active</span>
              </a>
            </td>
            @elseif($productComment->appear === 0)
            <td style="text-align: center">
              <a href="{{url('admin/brand/changeStatus',$productComment->id)}}"><span
                  class="label label-danger">inactive</span></a>
            </td>
            @endif
            <td style="text-align: center">
              <?= date("H:i d-m-Y", strtotime($productComment->created_at)) ?>
            </td>
            <td style="text-align: right">
              <a onclick="delete_product_comment({{$productComment->id}})" data-toggle="modal"
                data-target="#modal-delete-product-comment">
                <button class="btn waves-effect waves-light btn-danger disabled"><i class="fa fa-trash"
                    aria-hidden="true"></i>
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
@push('modal')
{{-- popup xóa comment --}}
<div id="modal-delete-product-comment" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mySmallModalLabel">XÁC NHẬN</h5>
      </div>
      <div class="modal-body">
        <form action="{{route('product.comment.destroy')}}" method="post">
          @csrf
          <input type="hidden" name="product-comment-id" class="product-comment-id">
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
{{-- popup add category --}}
@endpush
@push('js')
<script src="{{url('assets')}}/cutstom-js/product_comment.js"></script>
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