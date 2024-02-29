<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie</title>
</head>
<body>
  <table>
    <tr>
      <th>id</th>
      <th>映画タイトル</th>
      <th>画像</th>
      <th>公開年</th>
      <th>上映中かどうか</th>
      <th>概要</th>
      <th>編集</th>
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
      </tr>
    @endforeach
  </table>
</body>
</html>