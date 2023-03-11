<h1>Create New Post</h1>
<form action="{{route('test.insert')}}" method="post">
    @csrf
    <label>
        <input type="text" name="title" placeholder="Enter Title">
    </label><br><br>

    <label>
        <input type="text" name="body" placeholder="Enter Body">
    </label><br><br>
    <button type="submit">Submit</button>
</form>
