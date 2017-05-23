
<h1> Edit {{$movies->name}}</h1>



<form method="post" action="/movie/{{$movies->id}}">
    {{ method_field('PUT') }}

    <div class="form-group">
        <label for="title">Movie Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$movies->name}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </div>




    <button type="submit" class="btn btn-primary">Update</button>


    @include('layouts.error')


</form>

<a href="../index"> Back to Movies</a>




@include('layouts/footer')
