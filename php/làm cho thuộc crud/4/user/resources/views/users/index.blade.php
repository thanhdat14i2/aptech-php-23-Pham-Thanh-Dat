@foreach($users as $user)
    <a href="/users/{{$user->id}}">{{$user->name}}</a>
    <form action="/users/{{$user->id}}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit">xoa</button>
    </form>
@endforeach