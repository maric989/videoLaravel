@extends('layout')

@section('content')

    <form method="post" action="/category">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Movie name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="title">Movie name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>


        <button type="submit" class="btn btn-primary">Publish</button>


        @include('layouts/error')


    </form>

    <a href="../category/show/"> Back to category</a>

@endsection