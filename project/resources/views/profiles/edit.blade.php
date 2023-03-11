<h1>Edit profile</h1>
<form action="{{route('profile.update',$profile->id)}}" method="post">
    @csrf
    <label>
        <input type="text" name="name" value="{{$profile->name}}">
    </label>
    <br><br>
    <label>
        <input type="password" name="password" value="{{$profile->password}}">
    </label>
    <br><br>
    <button type="submit">Submit</button>
</form>
