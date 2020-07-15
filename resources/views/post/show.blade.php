@extends('template.master')
@section('page-title')
資料 #{{ $post->id }}
@endsection
@section('main')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>{{ $post->title }}</h1>
                <div class="my-5">
                    {{ $post->content }}
                </div>
                <div>
                    <div>建立時間：{{ $post->created_at }}</div>
                    <div>最後更新時間{{ $post->updated_at }}</div>
                </div>
                <br>
                <a href="#" class="btn btn-primary btn-sm" onclick="history.back()">回上頁</a>
            </div>
        </div>
    </div>
@endsection
