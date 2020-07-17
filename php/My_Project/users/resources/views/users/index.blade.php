@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent
<div class="container">
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="text-center">
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td class="d-flex align-items-center justify-content-around">
                    <form action="{{route('users.show',$user->id)}}" method="get">
                        <button class="btn btn-sm btn-primary">Show</button>
                    </form>
                    <form action="{{route('users.edit',$user->id)}}" method="get">
                        <button class="btn btn-sm btn-warning">Edit</button>
                    </form>
                    <form action="/users/{{$user->id}}" method="post">
                        <input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button class="btn btn-sm btn-danger" type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
