<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>{{ config('app.env', 'notfound') }}</h1>
  <h1>{{ config('app.name', 'Laravel') }}</h1>
  <p>test and deploy3</p>
  <table>
  <tr>
    <th>id</th>
    <th>name</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->name}}
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>