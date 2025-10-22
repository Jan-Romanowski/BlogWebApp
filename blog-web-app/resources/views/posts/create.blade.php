<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post constructor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #1a1a1c;
            color: #f1f1f1;
        }
        .card {
            background-color: #2a2a2d;
            border: 1px solid #3c3c40;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            border-left: 5px solid #20c997;
        }
        .card-header {
            background-color: #2a2a2d !important;
            border-bottom: 1px solid #3c3c40 !important;
        }
        .text-success-custom {
            color: #20c997 !important;
            text-shadow: 0 0 5px rgba(32, 201, 151, 0.2);
        }
        .form-label {
            color: #d1d1d1;
        }
        .form-control {
            background-color: #3c3c40;
            border-color: #4a4a4f;
            color: #f1f1f1;
        }
        .form-control:focus {
            background-color: #3c3c40;
            border-color: #20c997;
            box-shadow: 0 0 0 0.25rem rgba(32, 201, 151, 0.25);
            color: #f1f1f1;
        }
        .btn-custom-save {
            background-color: #20c997;
            border-color: #20c997;
            color: black;
            transition: background-color 0.3s ease;
        }
        .btn-custom-save:hover {
            background-color: #1aae84;
            border-color: #1aae84;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <h1 class="h3 mb-0 text-success-custom">Create new post</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-light btn-sm mb-4">
                            &larr; Back to Posts List
                        </a>

                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Title:</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="Enter title">
                                @error('title')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="content" class="form-label fw-bold">Content:</label>
                                <textarea name="content" id="content" class="form-control" rows="8" placeholder="Enter some text">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-custom-save w-100">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>