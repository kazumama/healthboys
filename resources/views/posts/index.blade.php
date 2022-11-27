<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div style= 'text-align:center; '>
        <h1>エラーを解決しましょう！</h1>
        <h2>カリキュラム一覧画面</h2>
        
        <a href='/posts/create'>新規投稿</a>
        </div>
        <div>
            @foreach ($curriculums as $curriculum)
                <div style='border:solid 1px; width: 400px; margin: 0 auto; margin-bottom: 10px;  text-align:center;  padding:20px 0; background-color: #00FF00; '>
                        <p>
                    　　<a href="/posts/{{ $curriculum->id }}">{{ $curriculum->name }}</a>
                    </p>
                </div>
            @endforeach
        </div>
    </body>
</html>
