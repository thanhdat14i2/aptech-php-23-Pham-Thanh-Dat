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
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <th scope="row">{{$article->id}}</th>
                <th>{{$article->title}}</th>
                <th>{{$article->description}}</th>
                <td class="d-flex align-items-center justify-content-around">
                    <form action="{{route('articles.destroy',$article->id)}}" method="get">
                        <button class="btn btn-sm btn-primary">Show</button>
                    </form>
                    <form action="{{route('articles.edit',$article->id)}}" method="get">
                        <button class="btn btn-sm btn-warning">Edit</button>
                    </form>
                    <form action="/articles/{{$article->id}}" method="post">
                        <input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button class="btn btn-sm btn-danger" type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="text-center">
        <h2>Content</h2>
        <h3>{{$article->content}}</h3>
    </div>
</div>
@endsection
