<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet show</title>
</head>
<body>
    <p><b>名前：{!! nl2br(e($planet->name)) !!}</b></p>
    <p><b>名前(英語)：{!! nl2br(e($planet->english_name)) !!}</b></p>
    <p><b>半径：{!! nl2br(e($planet->radius)) !!}</b></p>
    <p><b>重量：{!! nl2br(e($planet->weight)) !!}</b></p>

    <a href="/planets">戻る</a>
</body>
</html>
