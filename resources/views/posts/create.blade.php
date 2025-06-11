<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>
    <form action="{{route('posts.store')}}">
        @csrf
        <label for="title">title</label>
        <input type="text" name="title" required>
        <br><br>
        <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>
        <button type="submit">Create</button>
        <br><br>
    </form>
</body>
</html>
