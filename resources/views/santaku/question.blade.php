<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>santakuアプリ</title>
</head>

<p>method-actionは </p>
<h1>viewのファイル名__question.blade.php[三択問題が出題される画面]</h1>
<p>-----------------------------------------------------------------------------------------
<br />
<a class="btn" href="/">index画面へ戻る</a></p>
<p>-----------------------------------------------------------------------------------------
<br />
<span>■問題:</span>
<br />
<div>
@foreach($santaku as $santaku1)

            <summary>
              <p>問題{{ $santaku1->question }}</p>  
            </summary>
            @if($counter =1) 
            @break
                $counter++;
            @endif
@endforeach

<p>---------------------------------------------------------------- </p>
<br />
<span>■選択肢</span>

<form action="{{ route('answer.index') }}" method="post">
@csrf
<input type="hidden" name="" value="">
<label><input type="radio" name="sentaku1" value="1">{{ $mondai1->answer }}</label>
<br />
<label><input type="radio" name="sentaku2" value="2">{{ $mondai2->answer }}</label>
<br />
<label><input type="radio" name="sentaku3" value="3">{{ $mondai3->answer }}</label>
<input type="submit" value="回答する">
</form>

<br />

<h2>▼▼▼▼▼※開発用の案内につきここから下は削除予定▼▼▼▼▼▼</h2>
<ul>この画面からの移動先<li><a href="/">1.〇index画面へ /resources/views/santaku/index.blade.php</a></li>
    <li>2.✕問題と答えを新規作成画面へ /resources/views/santaku/new.blade.php</li>
    <li>3.✕あなたの三択設定画面へ /resources/views/santaku/santakuset.blade.php</a></li>
    <li> <a href="/question">4.〇三択を解く画面へ /resources/views/santaku/question.blade.php</a></li>
    <li>5.✕自分が作成した問題を一覧表示する画面へ /resources/views/santaku/list.blade.php</li>
    <li>6.✕問題と答えを編集する画面へ /resources/views/santaku/edit.blade.php</li>
</ul>

