<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Article CRUD Laravel Demo</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
 
<body>
  @include('layout.header')
  <hr>
  @section('content') @show
  <hr>
  @include('layout.footer')
</body>
 
</html>