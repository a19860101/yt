@extends('template.master')
@section('page-title')
修改資料
@endsection
@section('main')
    <form action="{{route('post.update',['id'=>$post->id])}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="title" value="{{ $post->title }}">
        <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
        <input type="submit" value="更新">
    </form>
@endsection