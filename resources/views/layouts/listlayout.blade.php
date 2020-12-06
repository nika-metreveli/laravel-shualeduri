<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <style>
  .container {
    width: 80%;
    display: flex;
    margin: 0 auto;
    min-height: 100vh;
    border: 1px solid black;
    flex-wrap: wrap;
  }

  .item {
    width: 20%;
    padding: 10px;
    height: 300px;
    min-height: 300px;
    border: 1px dashed red;
  }
  </style>
</head>
<body>
@yield('content')
</body>
</html>