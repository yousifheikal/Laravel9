<h1 style="color: #4b5563">Create New Post</h1>

<form action="{{route('post.store')}}" method="post">
    @csrf
    <label>
        <input type="text" name="title" placeholder="Title">
    </label><br><br>
    <label>
        <input type="text" name="body" placeholder="Content">
    </label><br><br>
    <button type="submit">Submit</button>
</form>
