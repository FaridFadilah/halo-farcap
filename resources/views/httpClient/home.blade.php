<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>home</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>nama</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pengguna as $data)
        <tr>
          <td>{{ $data['nama'] }} </td>
          <td>{{ $data['email'] }} </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>