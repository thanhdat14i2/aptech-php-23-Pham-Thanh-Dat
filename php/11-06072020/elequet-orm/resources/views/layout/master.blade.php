<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User CRUD Laravel Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
 
<body>
  @include('layout.header')
  <hr>
  @section('content') @show
  <hr>
  @include('layout.footer')
</body>
 
</html>