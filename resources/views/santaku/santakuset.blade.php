<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>santakuアプリ</title>
</head>

<a class="btn" href="/">index画面へ戻る</a>
<p>-----------------------------------------------------------------------------------------</p>
<h2>三択アプリ　あなたの出題範囲設定画面</h2>
<p>-----------------------------------------------------------------------------------------</p>

<form method="get" action="/question">■この設定で問題をとく<br />
    <span>選択数:</span>
    <br />
    <input type="radio" name="選択肢" value="2" />
    <span>2択</span>
    <input type="radio" name="選択肢" value="3" />
    <span>3択</span>
    <input type="radio" name="選択肢" value="4" />
    <span>4択</span>
    <br />
    <br />
    <span>選択ジャンル:</span>
    <br />
    <input type="checkbox" name="ジャンル" value="javascript" />
    <span>javascript</span>
    <input type="checkbox" name="ジャンル" value="node.js" />
    <span>node.js</span>
    <input type="checkbox" name="ジャンル" value="taxmaster" />
    <span>税理士</span>
    <input type="checkbox" name="ジャンル" value="boki" />
    <span>簿記</span>
    <br />
    <button type="submit">選択問題をとく</button>
</form>