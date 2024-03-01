<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sheet</title>
</head>
<body>
  <table>
    <tr>
      <th></th>
      <th></th>
      <th>スクリーン</th>
      <th></th>
      <th></th>
    </tr>
    @foreach ($sheets->groupBy('row') as $row => $rowSheets)
      <tr>
        @foreach ($rowSheets->sortBy('column') as $sheet)
          <td>{{ $sheet->row }}-{{ $sheet->column }}</td>
        @endforeach
      </tr>
    @endforeach
  </table>
</body>
