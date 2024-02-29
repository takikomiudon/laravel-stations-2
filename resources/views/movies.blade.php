<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie</title>
</head>
<body>
  @if (session('message'))
    <div class='alert alert-success'>
      {{ session('message') }}
    </div>
  @endif
  <form action="/movies" method="get">
    <input type="text" name="keyword" placeholder="検索">
    <input type="radio" name="is_showing" value="" checked>すべて
    <input type="radio" name="is_showing" value="0">公開予定
    <input type="radio" name="is_showing" value="1">公開中
    <input type="submit" value="検索">
  </form>
  <table>
    <tr>
      <th>id</th>
      <th>映画タイトル</th>
      <th>画像</th>
      <th>公開年</th>
      <th>上映中かどうか</th>
      <th>概要</th>
      <th>編集</th>
      <th>削除</th>
    </tr>
    @foreach ($movies as $movie)
      <tr>
        <td>{{ $movie->id }}</td>
        <td>{{ $movie->title }}</td>
        <td><img src="{{ $movie->image_url }}" alt="{{ $movie->title }}"></td>
        <td>{{ $movie->published_year }}</td>
        <td>{{ $movie->is_showing ? '上映中' : '上映予定' }}</td>
        <td>{{ $movie->description }}</td>
        <td>
          <button onclick="location.href='/admin/movies/{{ $movie->id }}/edit'">
            編集
          </button>
        </td>
        <td>
          <form action="/admin/movies/{{ $movie->id }}/destroy" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除" 
              onclick="return confirm('削除しますか？');">
          </form>
        </td>
      </tr>
    @endforeach
  </table>
</body>
</html>
