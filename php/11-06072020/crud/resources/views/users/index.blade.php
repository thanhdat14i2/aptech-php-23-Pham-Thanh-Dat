@foreach($users as $user)
<a href="users/{{$user->id}}">{{$user->id}}</h2>

<p>{{$user->name}}</p>
<p>{{$user->email}}</p>
<p>{{$user->password}}</p>
<form action="users/{{$user->id}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">    
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit">Xoa</button>
</form>
<form action="users/{{$user->id}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">    
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit">Xoa</button>
</form>
@endforeach
