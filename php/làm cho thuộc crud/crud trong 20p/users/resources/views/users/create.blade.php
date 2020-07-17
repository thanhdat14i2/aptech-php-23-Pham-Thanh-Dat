<form action="/users" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name" id="name">
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <button type="submit">CREATE</button>
</form>