<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿詳細画面</h1>
        <div>
            <p>タイトル：{{ $review->title }}</p>
            <p>本文：{{ $review->body }}</p>
            <p>カテゴリー：<a href="/categories/{{ $review->curriculum->id }}">{{ $review->curriculum->name }}</a></p>
        </div>
        <div>
            <p class="edit">[<a href="/posts/{{ $review->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
