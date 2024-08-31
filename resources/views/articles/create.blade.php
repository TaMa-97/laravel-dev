<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>記事投稿 | ブログ</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <div class="site-title">ブログ</div>
    </header>
    <main class="container">
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            <dl class="form-list">
                <dt>タイトル</dt>
                <dd><input type="text" name="title"></dd>
                <dt>本文</dt>
                <dd><textarea name="body" rows="5"></textarea></dd>
            </dl>
            <button type="submit">投稿する</button>
            <a href="{{ route('articles.index') }}">キャンセル</a>
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>
