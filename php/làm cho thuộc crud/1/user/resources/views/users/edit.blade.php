<h1>Sua Nguoi Dung ID {{$user->id}}</h1>
<form action="/users/{{$user->id}}" method="POST">
    <input type="hidden" name="_method" value=PATCH>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name" id="name" value="{{$user->name}}">
    <input type="email" name="email" id="email" value="{{$user->email}}">
    <input type="password" name="password" id="password" value="{{$user->password}}">
    <button type="submit"></button>
</form>