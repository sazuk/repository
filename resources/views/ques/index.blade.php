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
            <a href="/announces">お知らせ</a>
            <a href="/questions">問題を解く</a>
            <a href="/favorites">問題を見返す</a>
             
        </h2>
        <h1>流れ図学習ツール</h1>
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>流れ図とは</h2>
                <p class='body'>このサイトを作った理由</p>
            </div>
        </div>
    </body>
</html>
</x-app-layout>