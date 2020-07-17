@extends('template.master')
@section('page-title')
新增資料
@endsection
@section('main')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>新增資料</h1>
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title">
                    </div>
                    <div class="form-group">
                        <input type="file" name="img">
                    </div>
                    <input type="submit" value="上傳" class="btn btn-primary btn-sm">
                    <input type="button" value="取消" class="btn btn-danger btn-sm" onclick="history.back()">
                </form>
            </div>
        </div>
    </div>

@endsection