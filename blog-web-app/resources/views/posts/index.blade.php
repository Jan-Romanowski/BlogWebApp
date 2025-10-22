<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <hr>
    @foreach($posts as $post)
        <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
        <p>{{ Str::limit($post->content, 100) }}</p>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
        <hr>
    @endforeach
</body>
</html>
