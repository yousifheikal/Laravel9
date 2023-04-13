<h1>Create New user</h1>
<form action="{{route('login.store')}}" method="post">
    @csrf
    <input type="text" name="name"><br><br>
    <input type="password" name="password"><br><br>
    <button type="submit">Submit</button>
</form>
