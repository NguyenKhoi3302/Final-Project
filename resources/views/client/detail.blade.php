@extends('layouts.guest')
@section('content')
<h1>
    <?=$kq->title?>
</h1>
<em>
    Ngày đăng
    <?=date('d/m/Y' , strtotime($kq->created_at)) ?>
</em>
<h2>
    <?=$kq->summary?>
</h2>
<hr>
<div id='content'>
    <?=$kq->content?>
</div>
@endsection