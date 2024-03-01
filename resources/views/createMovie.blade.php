<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie</title>
</head>
<body>
  <form method="post" action="{{ url('/admin/movies/store') }}">
    @csrf
    <div>
      <label for="title">映画タイトル</label>
      <input type="text" id="title" name="title" required>
    </div>
    <div>
      <label for="image_url">画像URL</label>
      <input type="text" id="image_url" name="image_url" required>
    </div>
    <div>
      <label for="published_year">公開年</label>
      <input type="number" id="published_year" name="published_year" required>
    </div>
    <div>
      <label for="is_showing">公開中かどうか</label>
      <input type="hidden" name="is_showing" value="0">
      <input type="checkbox" id="is_showing" name="is_showing" value="1">
    </div>
    <div>
      <label for="genre">ジャンル</label>
      <input type="text" id="genre" name="genre" required>
    </div>
    <div>
      <label for="description">概要</label>
      <textarea id="description" name="description" required></textarea>
    </div>
    <button type="submit">登録</button>
  </form>
  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
</body>
</html>
