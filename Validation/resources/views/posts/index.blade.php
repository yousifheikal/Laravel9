<h1>All Data</h1>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
{{--<a class="btn btn-danger" href="{{route('posts.delete.truncate')}}" role="button" >Delete ALL Truncate</a>--}}
{{--<br><br>--}}
{{--<a class="btn btn-danger" href="{{route('posts.delete')}}" role="button" >Delete ALL</a>--}}
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Pro</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('post.edit',$post->id)}}" role="button" >Edit</a>
                <form action="{{route('post.destroy',$post->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
                {{--                <a class="btn btn-danger" href="{{route('post.destroy',$post->id)}}" role="button" >Delete</a>--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
