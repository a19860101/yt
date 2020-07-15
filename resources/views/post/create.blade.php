@extends('template.master')
@section('page-title')
新增資料
@endsection
@section('main')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>新增資料</h1>
                <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">標題</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">內容</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="submit" value="新增" class="btn btn-primary btn-sm">
                    <input type="button" value="取消" class="btn btn-danger btn-sm" onclick="history.back()">

                </form>
                @if($errors -> any())
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                @endif
            </div>
        </div>
    </div>

@endsection