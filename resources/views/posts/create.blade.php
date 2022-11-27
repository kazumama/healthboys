<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>投稿作成</h1>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" name="review[title]" placeholder="エラー文orタイトル" value="{{ old('review.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            <div>
                <h2>本文</h2>
                <textarea name="review[body]" placeholder="～を～のように変更したら直りました。">{{ old('review.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <div>
                <h2>カテゴリー</h2>
                <select name="review[curriculum_id]">
                    @foreach($curriculums as $curriculum)
                        <option value="{{ $curriculum->id }}">{{ $curriculum->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
