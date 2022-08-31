<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>santakuアプリ</title>
</head>

<body>
<p>method-actionは </p>
<h1>viewのファイル名__answer.blade.php[三択問題の答え合わせ画面]</h1>
<p>-----------------------------------------------------------------------------------------</p>
<br />
<a class="btn" href="/">index画面へ戻る</a>
<p>-----------------------------------------------------------------------------------------</p>
<br />
<span>■問題:</span>
<summary>
        <p>{{ $questioned->question }}</p>
    </summary>

<span>■あなたの選択:</span>
<br />
<summary>
        <p>{{ $choiced->answer }}</p>
    </summary>
    <p>正誤：{{ $seigo }}</p>

<div>
</div>
<p>---------------------------------------------------------------- </p>
<br />
<span>■選択肢1</span>

<summary>
        <p>問題：{{ $shuffled0->question }}</p>
    </summary>
    <summary>
        <p>答え：{{ $shuffled0->answer }}</p>
    </summary>
    <summary>
        <p>解説：{{ $shuffled0->comment }}</p>
    </summary>
    <span>■選択肢2</span>
    <summary>
        <p>問題：{{ $shuffled1->question }}</p>
    </summary>
    <summary>
        <p>答え：{{ $shuffled1->answer }}</p>
    </summary>
    <summary>
        <p>解説：{{ $shuffled1->comment }}</p>
    </summary>
    <span>■選択肢3</span>
    <summary>
        <p>問題：{{ $shuffled2->question }}</p>
    </summary>
    <summary>
        <p>答え：{{ $shuffled2->answer }}</p>
    </summary>
    <summary>
        <p>解説：{{ $shuffled2->comment }}</p>
    </summary>






<a class="btn" href="/question">次の問題へ</a>
<br />

<section>
    <h2>▼▼▼▼▼※開発用の案内につきここから下は削除予定▼▼▼▼▼▼</h2>
    <ul>この画面からの移動先
        <li><a href="/">1.〇index画面へ /resources/views/santaku/index.blade.php</a></li>
        <li>2.✕問題と答えを新規作成画面へ /resources/views/santaku/new.blade.php</li>
        <li>3.✕あなたの三択設定画面へ /resources/views/santaku/santakuset.blade.php</li>
        <li><a href="/question">4.〇三択を解く画面へ /resources/views/santaku/question.blade.php</a></li>
        <li>5.✕自分が作成した問題を一覧表示する画面へ /resources/views/santaku/list.blade.php</li>
        <li>6.✕問題と答えを編集する画面へ /resources/views/santaku/edit.blade.php</li>
    </ul>
</section>
</body>
</html>