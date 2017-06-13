<form method="post" action="/actor">

{{ csrf_field() }}

<div class="form-group">
    <label for="title">First Name:</label>
    <input type="text" class="form-control" id="fname" name="fname">
</div>

<div class="form-group">
    <label for="title">Last name:</label>
    <input type="text" class="form-control" id="lname" name="lname">

</div>




<button type="submit" class="btn btn-primary">Publish</button>


@include('layouts/error')


</form>

<a href="../actor/show/"> Back to actors</a>
