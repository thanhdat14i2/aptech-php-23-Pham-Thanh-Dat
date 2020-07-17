@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent
<div class="container">
    <form action="/users/{{$user->id}}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{$user->email}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{$user->password}}">
        </div>
        <button type="submit" type="button" class="btn btn-primary">EDIT</button>
    </form>
</div>
@endsection

