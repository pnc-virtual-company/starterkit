<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('bootstrap-4.1.3/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('mdi-3.0.39/css/materialdesignicons.min.css') }}" rel="stylesheet" />

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('bootstrap-4.1.3/js/bootstrap.min.js') }}"></script>

        <link rel="icon" href="{{ asset('favicon.ico') }}">
    </head>
    <body>
        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                <h1 class="jumbotron-heading">Laravel - Starter Kit for PNC</h1>
                <p class="lead text-muted">
                    This starter will help you to start your first laravel project without the need to download or install something.
                    Copy/paste the distribution and start to develop in PHP.
                </p>
                <p>
                    <a href="https://laravel.com/docs" target="_blank" class="btn btn-primary"><i class="mdi mdi-book-open-page-variant"></i> Documentation</a>
                    <a href="https://laracasts.com" target="_blank" class="btn btn-secondary"><i class="mdi mdi-help-circle-outline"></i>Laracasts</a>
                    <a href="https://laravel-news.com" target="_blank" class="btn btn-secondary"><i class="mdi mdi-newspaper"></i>News</a>
                    <a href="https://github.com/laravel/laravel" target="_blank" class="btn btn-secondary"><i class="mdi mdi-code-string"></i>GitHub</a>
                </p>
                </div>
            </section>
        </main>
    </body>
</html>
