<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User CRUD Laravel Demo</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Action</td>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td><a href="/users/{{$user->id}}">{{$user->id}}</a></td>
                            <td>{{$user->name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td class="d-flex h-100">
                                <form action="/users/{{$user->id}}" method="post">
                                    <input type="hidden" name="_method" value='delete'>
                                    <input type="hidden" name="_token" value='{{csrf_token()}}'>
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                                <form action="{{route('users.show',$user->id)}}" method="get">
                                    <button type="submit" class="btn-warning">Show</button>
                                </form>
                                <form action="{{route('users.edit',$user->id)}}" method="get">
                                    <button type="submit" class="btn-primary">Edit</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
