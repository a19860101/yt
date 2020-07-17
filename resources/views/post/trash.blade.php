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
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                    @if($post -> trashed())
                    <tr>
                        <td>{{$post -> id}}</td>
                        <td>{{$post -> title}}</td>
                        <td>{{$post -> updated_at}}</td>
                        <td>
                            <a href="{{route('trash.restore',['id'=>$post -> id])}}" class="btn btn-info">還原</a>
                            <form action="{{route('trash.delete',['id'=>$post -> id])}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <input type="submit" value="刪除" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @else
                    <tr>
                        <td>{{$post -> id}}</td>
                        <td>{{$post -> title}}</td>
                        <td>{{$post -> updated_at}}</td>
                        <td>
                            不是垃圾
                        </td>
                    </tr>
                    @endif
                    
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection