@extends('layouts.guest')
@section('content')

@foreach($news_list as $item)
    {{$item->title}}
@endforeach
@foreach($pd_list as $item)
    {{$item->name}}
@endforeach

@endsection
