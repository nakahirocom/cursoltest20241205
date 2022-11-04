<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>santakuアプリ</title>
</head>

<body>
    <div class="container">
    <a class="btn btn-link" href="/">index画面へ戻る</a>
    <a class="btn btn-link" href="/question">次の問題へ</a>
    @auth

    @endauth

    <p class="h2">三択アプリ　答え合わせ</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><span class="mark">{{ Auth::user()->name }}</span> がログイン中</li>
          <li class="breadcrumb-item active" aria-current="page">ユーザーid{{ Auth::user()->id }}</li>
        </ol>
      </nav>

    <span>出題された問題:</span>
    <p class="h2"><span class="btn btn-outline-dark">{{ $questioned->question }}</span>
    </p>

    @if ($isCorrect)
    <span class="btn btn-outline-primary">
         {{ $choiced->answer }}：正解</span>
    @else
    <span class="btn btn-outline-danger">
        {{ $choiced->answer }}：不正解</span>
    @endif
<p>-------------------------------------------------------</p>


    </p>
    </span>

        <span class="placeholder col-12 placeholder-xs"></span>
        <br />

        @for ($i = 0; $i < count($viewModels); $i++) 
  
            @if ($viewModels[$i]->isCorrect() )
            <span class="btn btn-outline-primary">■選択肢{{ $i + 1 }}：{{ "正解" }}</span>
            @else
            <span class="btn btn-outline-danger">■選択肢{{ $i + 1 }}：{{ "不正解" }}</span>
            @endif

              <div class="d-inline p-2 bd-highlight">あなたの正解率：{{ $uidseikairituModels[$i] }}% /累計回答数：{{ $uidkaitousuuModels[$i] }}</div>
              <div class="d-sm-inline p-2 bd-highlight">みんなの正解率：{{ $allseikairituModels[$i] }}% /累計回答数：{{ $allkaitousuuModels[$i] }}</div>
              <div class="collapse show" id="collapseExample" style="">
                <div class="card card-body">
                    <p>問題：{{ $viewModels[$i]->getQuestion() }}</p>
                    <p>答え：{{ $viewModels[$i]->getAnswer() }}</p>
                    <p>解説：{{ $viewModels[$i]->getComment() }}</p>
                   Ï
                </div>
            </div>                  
            <br>
Ï
        @endfor
        </div>
</body>

</html>