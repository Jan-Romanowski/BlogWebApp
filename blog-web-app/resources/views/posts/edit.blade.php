<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content">{{ old('content', $post->content) }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
