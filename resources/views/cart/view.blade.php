@extends('client/index')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="card text-center" style="margin-top:200px">
    <div class="card-header">
      Featured
    </div>
    @php $i=1 @endphp
    @foreach($cart as $item)
        <div class="card-body p-0 ">
            <div class="d-flex">
                <div class="p-2 border">{{ $i }}</div>
                <div class="p-2 border  col-4 ">{{ $item['images'] }}</div>
                <div class="p-2 border  col-4 ">{{ $item['name'] }}</div>
                <div class="p-2 border col-3 border text-center">
                    <div class="input-group">
                        <span class="input-group-text btn btn-danger" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> -     </span>
                            <input type="number" value="{{ $item['quantity'] }}" class="form-control text-center" min="1" max="100">
                        <span class="input-group-text btn btn-success" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> +    </span>
                    </div>
                </div>
                <div class="p-2 border col-2 border text-end">{{ Cart::total()  }}</div>
                <div class="p-2 border flex-grow-1 text-end"><a href="#" class="btn btn-default "><i class="bi bi-trash"></i></a></div>
            </div>
        </div>
        @php $i++; @endphp
    @endforeach
    <div class="card-footer text-muted">
      2 days ago
    </div>
  </div>
@endsection
