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
                        {{ $article->title }}
                  </div>

                  <div class="card-body">

                        <div class="m-5">{{ $article->body }}</div>

                        <div class="d-flex">
                              <div class="card">
                                    <div class="card-header text-white bg-primary">
                                          First Size
                                    </div>
                                    <div class="card-body">
                                          <img class="img-fluid img-thumbnail" src="{{ asset($article->image1) }}">
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header text-white bg-primary">
                                          Second Size
                                    </div>
                                    <div class="card-body">
                                          <img class="img-fluid img-thumbnail" src="{{ asset($article->image2) }}">
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header text-white bg-primary">
                                          Third Size
                                    </div>
                                    <div class="card-body">
                                          <img class="img-fluid img-thumbnail" src="{{ asset($article->image3) }}">
                                    </div>
                              </div>
                        </div>

                  </div>

            </div>

      </div>
</body>

</html>