@extends('template.master')
@section('page-title')
資料列表
@endsection
@section('main')
    <h1>列表</h1>
    @foreach($posts as $post)
        <div>{{ $post->title }}</div>
        <diV>{{ $post->content }}</diV>
        <div>{{ $post->created_at }}</div>
        <form action="{{ route('post.destroy', ['id' => $post->id]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="刪除" onclick="return confirm('確認刪除')">
        </form>
        <a href="{{ route('post.show', ['id' => $post->id]) }}">檢視</a>
        <a href="{{ route('post.edit', ['id' => $post->id]) }}">編輯</a>
        <hr>
    @endforeach
@endsection