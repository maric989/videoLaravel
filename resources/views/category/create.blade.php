<form method="post" action="/category">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Genre:</label>
        <input type="text" class="form-control" id="genre" name="genre">
    </div>





    <button type="submit" class="btn btn-primary">Publish</button>


    @include('layouts/error')


</form>

<a href="../category/show/"> Back to category</a>
