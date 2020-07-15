@extends('template.master')
@section('page-title')
資料 #{{ $post->id }}
@endsection
@section('main')
    <h1>show</h1>
        <div>#{{ $post->id }}</div>
        <div>{{ $post->title }}</div>
        <diV>{{ $post->content }}</diV>
        <div>{{ $post->created_at }}</div>
        <div>{{ $post->updated_at }}</div>
@endsection
