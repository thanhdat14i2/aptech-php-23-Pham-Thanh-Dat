@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent
<div class="container">
    <form action="/articles" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <textarea rows="5" cols="50" id="description" name="description" class="form-control" placeholder="Enter Description"></textarea>
        </div>
        <div class="form-group">
            <label for="Content">Content</label>
            <textarea rows="50" cols="50" id="content" name="content" class="form-control" placeholder="Enter Content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">CREATE</button>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
@endsection
