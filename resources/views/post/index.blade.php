<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index</h1>
    <nav>
        <a href="{{ route('post.create') }}"> 新增 </a>
    </nav>
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
</body>
</html>