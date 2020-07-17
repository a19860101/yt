@extends('template.master')
@section('page-title')
資料列表
@endsection
@section('main')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>列表</h1>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>標題</th>
                        <th>最後更新時間</th>
                        <th>動作</th>
                    </tr>
                @foreach($posts as $post)
                   
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->updated_at}}</td>
                        <td>
                        
                        <a href="{{ route('post.show', ['id' => $post->id]) }}" class="btn btn-success btn-sm">檢視</a>
                        <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-primary btn-sm">編輯</a>
                        <form action="{{ route('post.destroy', ['id' => $post->id]) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <input type="submit" value="刪除" onclick="return confirm('確認刪除')" class="btn btn-danger btn-sm">
                        </form>
                        </td>
                    </tr>
                
                @endforeach
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection