
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

{{--
<h1>Edit {{ $actor->fname }}</h1>

<!-- if there are creation errors, they will show here -->


{{ Form::model($actor, array('route' => array('actor.update', $actor->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', null, array('class' => 'form-control')) }}
</div>
{{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}--}}
