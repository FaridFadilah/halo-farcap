<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if($errors->any())
    <i>
      {{ $errors->first() }}
    </i>
  @endif
  <form action="{{ route('login') }}" method="POST">
    @csrf
    <label for="email">Email : </label>
    <input type="email" id="email" name="email" placeholder="password">
    <label for="password">Password : </label>
    <input type="password" id="password" name="password" placeholder="password">
    <button type="submit">Submit</button>
  </form>
</body>
</html>