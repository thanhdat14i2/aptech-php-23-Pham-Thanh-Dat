<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User CRUD Laravel Demo</title>
  <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/users" class="btn btn-primary">back home</a>
                <h1>{{$user->id}}</h1>
                <h1>{{$user->name}}</h1>
                <h1>{{$user->password}}</h1>
                <h1>{{$user->email}}</h1>
            </div>
        </div>
    </div>
</body>
</html>

