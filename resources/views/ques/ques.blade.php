<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/b.css') }}">
    </head>
    <body>
         <h1>流れ図学習ツール</h1>
        <h2 class='title'>
        <a href="/">HOME</a>
        <a href="/announces">お知らせ</a>
        </h2>
       
        <a href="https://lms.quizgenerator.net/index.php?action=quizPlayer&options=eyJzY29faWQiOjQ5MzU4NDEsImNhbGwiOiJleHRlcm5hbCIsImhlYWRlciI6eyJzbnMiOnsidmlzaWJsZSI6dHJ1ZX0sInZpb2xhdGlvblJlcG9ydCI6eyJ2aXNpYmxlIjp0cnVlfSwiZ29vZCI6eyJ2aXNpYmxlIjpmYWxzZX0sInBhZ2VyIjp7InZpc2libGUiOmZhbHNlfX19&cate=1">
            <button class="p1">総合問題</button></a><br>
        <a href="https://lms.quizgenerator.net/index.php?action=quizPlayer&options=eyJzY29faWQiOjQ5MzYxOTQsImNhbGwiOiJleHRlcm5hbCIsImhlYWRlciI6eyJzbnMiOnsidmlzaWJsZSI6dHJ1ZX0sInZpb2xhdGlvblJlcG9ydCI6eyJ2aXNpYmxlIjp0cnVlfSwiZ29vZCI6eyJ2aXNpYmxlIjpmYWxzZX0sInBhZ2VyIjp7InZpc2libGUiOmZhbHNlfX19&cate=1">
            <button class="p2">流れ図知識問題</button></a><br>
        <a href="https://lms.quizgenerator.net/index.php?action=quizPlayer&options=eyJzY29faWQiOjQ5MzYyNDEsImNhbGwiOiJleHRlcm5hbCIsImhlYWRlciI6eyJzbnMiOnsidmlzaWJsZSI6dHJ1ZX0sInZpb2xhdGlvblJlcG9ydCI6eyJ2aXNpYmxlIjp0cnVlfSwiZ29vZCI6eyJ2aXNpYmxlIjpmYWxzZX0sInBhZ2VyIjp7InZpc2libGUiOmZhbHNlfX19&cate=1">
            <button class="p3">流れ図読み取り問題</button></a><br>
        </div>
        <div class='paginate'>
            {{ $questions->links() }}
        </div>
    </body>
</html>
</x-app-layout>