<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>エラーを解決しましょう！</h1>
        <h2>カリキュラム一覧画面</h2>
        <a href='/posts/create'>新規投稿</a>
        <div>
            @foreach ($curriculums as $curriculum)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                    　　<a href="/posts/{{ $curriculum->id }}">{{ $curriculum->name }}</a>
                    </p>
                </div>
            @endforeach
        </div>
    </body>
</html>
