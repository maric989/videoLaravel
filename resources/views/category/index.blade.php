@extends('layout')
@section('content')

    <div class="row">

        <a href="create"><h3>Create Category</h3></a>

    </div>


    <div class="row">

        <h1>  Genres:  </h1>
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
            @foreach($category as $cat)







                <tr>
                    <td> <a href="/category/show/{{$cat->id}}/"> {{$cat->genre}} </a></td>

                    <td>
                        <form action="/category/delete/{{$cat->id}}" method="POST" onsubmit="return confirm('Are you sure?');">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>
                    <td>
                        <form method="post" action="/category/{{$cat->id}}/edit">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-small btn-info"  type="submit">Edit</button>


                        </form>
                    </td>




                </tr>


                       @endforeach
            </tbody>
        </table>


    </div>




@endsection