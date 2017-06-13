
<h1> Edit {{$actor->fname}} {{$actor->lname}}{{--Edit {{$actor->fname} {$actor->lname}}--}}</h1>


<form method="post" action="/actor/{{$actor->id}}">
    {{ method_field('PUT') }}

    <div class="form-group">
        <label for="title">First Name:</label>
        <input type="text" class="form-control" id="fname" name="fname" value="{{$actor->fname}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </div>

    <div class="form-group">
        <label for="title">Last name:</label>
        <input type="text" class="form-control" id="lname" name="lname" value="{{$actor->lname}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </div>




    <button type="submit" class="btn btn-primary">Update</button>


    @include('layouts.error')


</form>

<a href="../show"> Back to actors</a>

