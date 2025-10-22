<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #1a1a1c;
            color: #f1f1f1;
        }
        .post-card {
            background-color: #2a2a2d;
            border: 1px solid #3c3c40;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            transition: transform 0.2s ease-in-out;
            border-left: 5px solid #0dcaf0;
        }
        .post-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5);
        }
        .page-title, .card-title a {
            color: #f1f1f1 !important;
        }
        .card-text {
            color: #b0b0b0 !important;
        }
        .border-bottom-dark {
            border-color: #444 !important;
        }
        .alert-dark-custom {
            background-color: #2a2a2d !important;
            color: #0dcaf0 !important;
            border-color: #0dcaf0 !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-bottom-dark pb-3">
            <h1 class="display-5 page-title">Blog</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg" style="background-color: #20c997; border-color: #20c997; color: black;">
                Create new post
            </a>
        </div>

        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="card post-card mb-4">
                    <div class="card-body">
                        <h2 class="card-title h4">
                            <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
                                {{ $post->title }}
                            </a>
                        </h2>

                        <p class="card-text">
                            {{ Str::limit($post->content, 150) }}
                        </p>

                        <div class="d-flex justify-content-end align-items-center">
                            <div class="btn-group" role="group">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-warning">
                                    Edit
                                </a>

                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-0 rounded-end">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-info alert-dark-custom" role="alert">
                No posts. Create your first post!
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>