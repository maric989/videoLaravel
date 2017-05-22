<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actors</title>
</head>
<body>


<h1>  Movie   </h1>
<ul>

    <li>Movie Name: {{$movies->name}}</li>
    <li>File Path: {{$movies->file_path}}</li>
    <li>Created at: {{$movies->created_at}}</li>

    @foreach($info as $movie)

        @foreach($movie->actors as $actor)
    <li> {{$actor->fname}} {{$actor->lname}}</li>
        @endforeach

    @endforeach








</ul>







<a href="../index"> Back to actors</a>

</body>
</html>