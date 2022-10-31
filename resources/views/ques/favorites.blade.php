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
        <a href="/announces">お知らせ</a>
        </h2>
        <h1>見返し用問題集</h1>
        <div class='posts'>
            @foreach ($users as $user)
                 @foreach($user->questions as $ques)   
                    {{ $ques->title }}
                    {{ $ques->based }}
                @endforeach
            @endforeach
        </div>
    </body>
</html>
</x-app-layout>