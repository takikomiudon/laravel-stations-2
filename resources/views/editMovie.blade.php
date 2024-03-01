<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie</title>
</head>
<body>
  <form method="post" action="{{ url('/admin/movies/' . $movie->id . '/update') }}">
    @method('PATCH')
    @csrf
    <div>
      <label for="title">映画タイトル</label>
      <input type="text" id="title" name="title" value="{{ $movie->title }}">
    </div>
    <div>
      <label for="image_url">画像URL</label>
      <input type="text" id="image_url" name="image_url" value="{{ $movie->image_url }}">
    </div>
    <div>
      <label for="published_year">公開年</label>
      <input type="text" id="published_year" name="published_year" value="{{ $movie->published_year }}">
    </div>
    <div>
      <label for="is_showing">公開中かどうか</label>
      <input type="hidden" name="is_showing" value="0">
      <input type="checkbox" id="is_showing" name="is_showing" value="1" {{ $movie->is_showing ? 'checked' : '' }}>
    </div>
    <div>
      <label for="genre">ジャンル</label>
      <input type="text" id="genre" name="genre" value="{{ $movie->genre->name }}">
    </div>
    <div>
      <label for="description">概要</label>
      <textarea id="description" name="description">{{ $movie->description }}</textarea>
    </div>
    <button type="submit">更新</button>
  </form>
  @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
</body>
