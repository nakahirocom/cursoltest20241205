<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>santakuアプリ</title>
</head>

<body>
  <div class="container">
    <a class="btn btn-link" href="/">index画面へ戻る</a></p>

    @auth
    <p class="h3">三択アプリ　新しく問題を登録する</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><span class="mark">{{ Auth::user()->name }}</span> がログイン中</li>
        <li class="breadcrumb-item active" aria-current="page">ユーザーid{{ Auth::user()->id }}</li>
      </ol>
    </nav>
    @endauth
    <br>

    <form method="post" action="{{ route('create.index') }}" enctype="multipart/form-data">
      @csrf

      <input type="text" name="small_label_id" class="form-control" placeholder="small_label_idの数字を入力。larabelは11です">
      <br />

      <input type="text" name="question" class="form-control" placeholder="問題を登録してください">
      @error('question')
      <p class="text-danger">{{ $message }}</p>
      @enderror

      <input type="file" name="question_image" placeholder="画像をセットしてください">
      <br />
      <br />

      <input type="text" name="answer" class="form-control" placeholder="答えを登録してください">
      @error('answer')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <br />

      <input type="text" name="comment" class="form-control" placeholder="コメントを登録してください">
      @error('comment')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <br />
      <input type="file" name="comment_image" placeholder="画像をセットしてください">
      <br />
      <br />

      <div class="col-12">
        <button type="submit" class="btn btn-outline-primary">新規登録し確認</button>
      </div>
      <br />
    </form>
    </p>
  </div>
</body>