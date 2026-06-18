<form action="/posts}" method="POST">

    @csrf

    <label>Title</label>
    <br>
    <input type="text" name="title">
    <br><br>

    <label>Description</label>
    <br>
    <textarea name="description"></textarea>
    <br><br>

    <label>Posted By</label>
    <br>
    <input type="text" name="posted_by">
    <br><br>

    <button type="submit">
        Save
    </button>

</form>