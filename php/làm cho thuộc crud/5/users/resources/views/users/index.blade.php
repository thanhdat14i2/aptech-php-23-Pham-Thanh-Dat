<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/boostrap.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>password</td>
                        <td>action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                    </tr>
                    <a href="/users/{{$user->id}}">{{$user->name}}</a>
                    <form action="/users/{{$user->id}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <!-- <input type="text" name="name" id="name">
                        <input type="email" name="email" id="email">
                        <input type="password" name="password" id="password"> -->
                        <button type="submit">xoa</button>
                    </form>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
