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
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Password</th>
        <th scope="col">Pro</th>
    </tr>
    </thead>
    <tbody>
    @foreach($profiles as $profile)
        <tr>
            <td>{{$profile->id}}</td>
            <td>{{$profile->name}}</td>
            <td>{{$profile->password}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('profile.edit',$profile->id)}}" role="button" >Edit</a>
                <a class="btn btn-danger" href="{{route('profile.delete',$profile->id)}}" role="button" >Delete</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a class="btn btn-danger" href="{{route('profile.delete.all')}}" role="button" >Delete All</a>
<br><br>
<a class="btn btn-danger" href="{{route('profile.truncate.all')}}" role="button" >Delete All by Truncate</a>
<br><br>
<a class="btn btn-dark" href="{{route('profile.create')}}" role="button" >Create Data</a>

</body>
</html>
