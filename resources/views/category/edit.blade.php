
<h1> Edit {{$category->genre}}</h1>



<form method="post" action="/category/{{$category->id}}">
    {{ method_field('PUT') }}

    <div class="form-group">
        <label for="title">First Name:</label>
        <input type="text" class="form-control" id="genre" name="genre" value="{{$category->genre}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </div>




    <button type="submit" class="btn btn-primary">Update</button>


    @include('layouts.error')


</form>

<a href="../show"> Back to actors</a>
