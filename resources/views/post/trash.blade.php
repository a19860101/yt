@extends('template.master')
@section('page-title')
垃圾桶
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>標題</th>
                        <th>最後修改時間</th>
                    </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post -> id}}</td>
                        <td>{{$post -> title}}</td>
                        <td>{{$post -> updated_at}}</td>
                        <td>
                            <a href="{{route('trash.restore',['id'=>$post -> id])}}">還原</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection