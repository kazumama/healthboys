<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>エラー文の参照</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>エラー文を直しましょう！</h1>
        <h2>{{ $curriculum->name }} の記事一覧</h2>
        <div>
            @foreach ($reviews as $review)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p><a href="/posts/{{ $review->id }}">{{ $review->name }}</a></p>
                    
                </div>
            @endforeach
        </div>
        <a href='/'>トップへ戻る</a>
        <div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
