@extends('layout')

@section('content')

<a href="create"><h3> Add movie </h3></a> <br>



<div>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach($movies as $movie)
            <tr>

                <td>

            <a href="/movie/show/{{$movie->id}}"><b>{{$movie->name}}</b></a>
               </td>
                <td>
                    <form action="/movie/delete/{{$movie->id}}" method="POST" onsubmit="return confirm('Are you sure?');">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
                <td>
                    <form method="post" action="/movie/{{$movie->id}}/edit">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-small btn-info"  type="submit">Edit</button>


                    </form>
                </td>
            </tr>



        @endforeach
            </tbody>
        </table>

</div>











@include('layouts/footer')

@endsection
