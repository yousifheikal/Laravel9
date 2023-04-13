<h1>Create New Post</h1>

<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>
        <input type="text" name="title" value="{{ old('title') }}" placeholder="Enter-Title">
    </label>
    <br><br>
    <label>
        <input type="text" name="body" value="{{ old('body') }}" placeholder="Enter-Body">
    </label>
    <br><br>
    <button type="submit">Send</button>
</form>
