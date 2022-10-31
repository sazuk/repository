<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2 class='title'>
        <a href="/">home</a>
        <a href="/questions">問題を解く</a>
        </h2>
        <h1>お知らせ</h1>
        <div class='posts'>
            @foreach ($announces as $anuns)
                <div class='post'>
                    <h2 class='title'>{{ $anuns->title }}</h2>
                    <p class='body'>{{ $anuns->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $announces->links() }}
        </div>
    </body>
</html>
</x-app-layout>