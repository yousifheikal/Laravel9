<h1>Create New Post</h1>
<form>
    <label>
        <input type="text" name="title" value={{$posts->title}}>
    </label><br><br>

    <label>
        <input type="text" name="body" value={{$posts->body}}>
    </label><br><br>
    <button type="submit">Submit</button>
</form>
