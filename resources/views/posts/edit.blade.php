<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Edit Post</h1>
<form action="{{route('posts.update',1)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$post['title']}}" required>
    <br><br>
    <label for="content">Content</label>
    <textarea name="content" id="content" required >{{$post['content']}}</textarea>
    <button type="submit">Update Post</button>
    <br><br>
</form>
</body>
</html>
