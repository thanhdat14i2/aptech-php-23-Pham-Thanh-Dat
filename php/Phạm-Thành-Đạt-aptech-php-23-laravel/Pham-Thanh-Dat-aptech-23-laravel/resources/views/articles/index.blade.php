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
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr class="text-center">
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
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
        @endforeach
        </tbody>
    </table>
</div>
@endsection

