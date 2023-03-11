<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Title</title>
</head>
<body>
<h1 style="color: #4b5563">Create New Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('post.store')}}" method="post">
    @csrf
    <label>
        <input id="title" type="text" placeholder="Title" name="title" class="@error('title') is-invalid @enderror">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </label><br><br>
    <label>
        <input id="body" placeholder="Body" type="text" name="body" class="@error('body') is-invalid @enderror">
        @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </label><br><br>
    <button type="submit">Submit</button>
</form>

</body>
</html>

