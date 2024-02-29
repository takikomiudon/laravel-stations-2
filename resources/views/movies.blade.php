<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie</title>
</head>
<body>
  <ul>
    @foreach ($movies as $movie)
      <li>タイトル: {{ $movie->title }}</li>
      <li>画像: <img src="{{ $movie->image_url }}" alt=""></li>
    @endforeach
  </ul>
</body>
</html>