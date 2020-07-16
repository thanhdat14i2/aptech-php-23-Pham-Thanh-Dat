<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tao Bai Viet</h1>
<form action="{{route('articles.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="title">title</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="description">description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="content">content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="categories">Categories:</label>
        <select name="category" id="categories">
            @foreach($categories as $category)
            <option value="{{$category}}">{{$category}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">cc</button>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#content')).catch( error => {
            console.error( error );
        });
</script>
</body>
</html>
