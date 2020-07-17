@extends('template.master')
@section('page-title')
資料列表
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Img</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{$product -> id}}</td>
                    <td>{{$product -> title}}</td>
                    <td>
                        <img src="storage/images/{{$product -> img}}" height='100'>
                    </td>
                    <td>
                        <form action="{{route('product.destroy',['id'=>$product->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="刪除" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
    
@endsection