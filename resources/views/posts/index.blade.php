<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Blog Posts</h1>
    <ul>
        @foreach ($posts as $id => $post)
            <li>
                <a href="{{route('posts.show', $id)}}">{{$post['title']}}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{route('posts.create')}}">Create New Post</a>
</body>
</html>
