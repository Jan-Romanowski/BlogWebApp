<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #1a1a1c;
            color: #f1f1f1;
        }
        .post-container {
            background-color: #2a2a2d;
            border: 1px solid #3c3c40;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
        }
        .post-title {
            color: #e5e5e5;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.05);
        }
        .post-content {
            line-height: 1.7;
            font-size: 1.1rem;
            color: #d1d1d1;
        }
        .border-dark-subtle {
            border-color: #444 !important;
        }
        .btn-warning {
            --bs-btn-color: #000;
            --bs-btn-bg: #ffc107;
            --bs-btn-border-color: #ffc107;
            --bs-btn-hover-bg: #e0a800;
            --bs-btn-hover-border-color: #e0a800;
        }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card post-container p-4 p-md-5">
                    <h1 class="display-4 mb-4 fw-bold post-title border-bottom border-dark-subtle pb-3">
                        {{ $post->title }}
                    </h1>

                    <div class="post-content mb-5">
                        <p>{{ $post->content }}</p>
                    </div>

                    <div class="d-flex justify-content-between align-items-center border-top border-dark-subtle pt-3">
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-light">
                            &larr; Back to Posts
                        </a>
                        <div class="btn-group" role="group">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure ? You want to delete this post ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-0 rounded-end">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>