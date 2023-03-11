<h1 style="color: #4b5563">Edit Post</h1>

<form action="{{route('post.update',$post->id)}}" method="post">
    @method('PUT')
    @csrf
    <label>
        <input type="text" name="title" value="{{$post->title}}">
    </label><br><br>
    <label>
        <input type="text" name="body" value="{{$post->body}}">
    </label><br><br>
    <button type="submit">Submit</button>
</form>
