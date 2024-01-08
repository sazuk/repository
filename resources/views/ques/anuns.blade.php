<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
       
        <link rel="stylesheet" href="{{ asset('css/a.css') }}">    </head>
    <body>
         <h1>流れ図学習ツール</h1>
        <h2 class='title'>
        <a href="/">HOME</a>
        <a href="/questions">問題を解く</a>
        </h2>
       　<h2 class='title'>お知らせ</h2>　
       　<p>学習ツールを公開しました</p>
            
        </div>
        <div class='paginate'>
        </div>
    </body>
</html>
</x-app-layout>