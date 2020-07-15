@extends('template.master')
@section('page-title')
新增資料
@endsection
@section('main')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <input type="text" name="title">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="新增">
    </form>
@endsection