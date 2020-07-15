<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>show</h1>
    @foreach($posts as $post)
        <div>#{{ $post->id }}</div>
        <div>{{ $post->title }}</div>
        <diV>{{ $post->content }}</diV>
        <div>{{ $post->created_at }}</div>
        <div>{{ $post->updated_at }}</div>
    @endforeach
</body>
</html>