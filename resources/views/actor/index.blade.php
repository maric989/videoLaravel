@extends('layout')
@section('content')

    <div class="row">

    <a href="create"><h3>Create Actor</h3></a>

    </div>


    <div class="row">

        <h1>  Actors:  </h1>
        <br>

    </div>

    <div class="span10 offset1">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Genre</th>
                <th>Action</th>
            </tr>

            </thead>
            <tbody>
    @foreach($actors as $actor)

    {{--{{dd($actor->fname)}}--}}





                <tr>
                    <td> <a href="/actor/show/{{$actor->id}}/"> {{$actor->fname}} {{$actor->lname}}</a></td>

                    <td>
                        <form action="/actor/delete/{{$actor->id}}" method="POST" onsubmit="return confirm('Are you sure?');">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>
                    <td>
                        <form method="put" action="/actor/{{$actor->id}}/edit">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-small btn-info"  type="submit">Edit</button>


                        </form>
                    </td>




                </tr>


            {{--     @include('actor.actors')--}}

        @endforeach
            </tbody>
        </table>


    </div>




@endsection