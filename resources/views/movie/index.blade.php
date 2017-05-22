@extends('layout')

@section('content')

<a href="create"> Add movie</a> <br>



<div>

        @foreach($movies as $movie)

            {{$movie->name}}

            <video id="my-video" class="video-js" controls preload="auto" width="300" height="300" data-setup="{}">

                <source src="http://video2.dev/{{$movie->file_path}}" type='video/mp4'> </video>

            <p> <b>Actors</b></p>

            @foreach($movie->actors as $act)
                <ul>

                    <li>{{$act->fname}} {{$act->lname}}</li>

                </ul>

            @endforeach

            <p> Category</p>

            @foreach($movie->category as $category)

                    <ul>

                    <li> {{$category->genre}}</li>

                    </ul>

            @endforeach



        @endforeach

</div>












@endsection