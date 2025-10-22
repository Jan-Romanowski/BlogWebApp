<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content">{{ old('content') }}</textarea>
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
