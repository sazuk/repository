<!DOCTYPE html>
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
        <a href="/announces">お知らせ</a>
        </h2>
        <h1>問題集</h1>
        <div class='posts'>
            @foreach ($questions as $ques)
                <div class='post'>
                    <h2 class='title'>{{ $ques->title }}</h2>
                    <p class='body'>{{ $ques->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $questions->links() }}
        </div>
    </body>
</html>