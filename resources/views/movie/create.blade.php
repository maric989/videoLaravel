@extends('layout')

@section('content')




    <form method="post" action="/movie" enctype="multipart/form-data">

        {{ csrf_field() }}


        <div class="form-group">
            <label for="title">Movie name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div>

            <input type="file" name="video">

        </div>

        <div>
            @foreach($categories as $category)

                <input type="checkbox" name="genre[]" value="{{$category->id}}">  {{$category->genre}}


            @endforeach

        </div>
        <div>
            @foreach($actors as $actor)

                <input type="checkbox" name="actor[]" value="{{$actor->id}}">  {{$actor->fname}} {{$actor->lname}}


            @endforeach

        </div>



        <button type="submit" class="btn btn-primary">Publish</button>


        @include('layouts/error')


    </form>

    <a href="../movie/index/"> Back to movies</a>

@endsection