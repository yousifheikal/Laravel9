<h1>Create New Post</h1>
<form action="{{route('forms.store')}}" method="post">
    @csrf
    <label>
        <input type="text" name="name" placeholder="Enter Name">
    </label><br><br>

    <label>
        <input type="password" name="password" placeholder="Enter Password">
    </label><br><br>
    <button type="submit">Submit</button>
</form>
