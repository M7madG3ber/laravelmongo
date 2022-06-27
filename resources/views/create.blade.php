<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Mongo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-3">

        <div class="card">

            <div class="card-header text-white bg-danger">
                Article
            </div>

            <div class="card-body">

                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input required type="text" name="title" class="form-control"
                            placeholder="Enter article title..." value="{{ old('title') }}">
                        {!! $errors->first('title', '<p class="alert alert-danger ">:message</p>' ) !!}
                    </div>

                    <div class="form-group mt-2">
                        <label>Body</label>
                        <textarea required class="form-control" name="body"
                            placeholder="Enter article body...">{{ old('body') }}</textarea>
                        {!! $errors->first('body', '<p class="alert alert-danger ">:message</p>' ) !!}
                    </div>

                    <div class="form-group mt-2">
                        <label>Image</label>
                        <input required type="file" name="image" class="form-control">
                        {!! $errors->first('image', '<p class="alert alert-danger ">:message</p>' ) !!}
                    </div>

                    <div class="form-group mt-2">
                        <button class="btn btn-danger" type="submit">Save</button>
                    </div>

                </form>

            </div>

        </div>

    </div>
</body>

</html>