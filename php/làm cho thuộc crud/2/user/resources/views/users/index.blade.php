@foreach($users as $user)
<div>
    <a href="/users/{{$user->id}}">{{$user->name}}</a>
    <form action="users/{{$user->id}}" method="POST">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">delete</button>
    </form>
</div>

<br>

@endforeach