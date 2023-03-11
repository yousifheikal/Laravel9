<h1>Edit Post</h1>
<form action="{{route('forms.update',$form->id)}}" method="post">
    @csrf
    @method('PUT')
    <label>
        <input type="text" name="name" value="{{$form->name}}">
    </label><br><br>

    <label>
        <input type="password" name="password" value="{{$form->password}}">
    </label><br><br>
    <button type="submit">Submit</button>
</form>
