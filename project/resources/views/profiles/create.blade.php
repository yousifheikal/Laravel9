<h1>Create New profile</h1>
<form action="{{route('profile.store')}}" method="post">
    @csrf
    <label>
        <input type="text" name="name" placeholder="Username">
    </label>
    <br><br>
    <label>
        <input type="password" name="password" placeholder="Password">
    </label>
    <br><br>
    <button type="submit">Submit</button>
</form>
