@extends('template.master')
@section('page-title')
資料列表
@endsection
@section('main')
    @foreach($products as $product)
        <div>
            {{$product -> title}}
            <img src="storage/images/{{$product -> img}}" width='200'>
        </div>
    @endforeach
@endsection