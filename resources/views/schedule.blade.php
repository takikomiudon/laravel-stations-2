<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Schedules</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>映画タイトル</th>
        <th>画像</th>
        <th>公開年</th>
        <th>上映中かどうか</th>
        <th>ジャンル</th>
        <th>概要</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $schedules->id }}</td>
        <td>{{ $schedules->title }}</td>
        <td><img src="{{ $schedules->image_url }}" alt="{{ $schedules->title }}" width="100"></td>
        <td>{{ $schedules->published_year }}</td>
        <td>{{ $schedules->is_showing ? 'Yes' : 'No' }}</td>
        <td>{{ $schedules->name }}</td>
        <td>{{ $schedules->description }}</td>
      </tr>
    </tbody>
  </table>
  <table>
    <thead>
      <tr>
        <th>開始時間</th>
        <th>終了時間</th>
      </tr>
    </thead>
    @foreach ($schedules->schedules as $schedule)
    <tr>
      <td>{{ $schedule->start_time }}</td>
      <td>{{ $schedule->end_time }}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
