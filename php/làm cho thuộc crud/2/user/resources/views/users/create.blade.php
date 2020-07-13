<form action="/users" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name" id="name">
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <button type="submit">them nguoi dung</button>
</form>