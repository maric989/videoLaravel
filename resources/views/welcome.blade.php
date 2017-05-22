<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <title>Album example for Bootstrap</title>


</head>

<body>


<div>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="css/index.jpeg"></a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="movie/index"><b>MOVIES</b> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actor/show"><b>ACTORS</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category/show"><b>CATEGORIES</b></a>
                </li>
            </ul>
            <span class="navbar-text">
      Navbar text with an inline element
    </span>
        </div>
    </nav>
</div>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Video App example</h1>
        <p class="lead text-muted">List of our small database</p>

    </div>
</section>

<div class="album text-muted">
    <div class="container">

        <div class="row">
            @foreach($movies as $movie)
            <div class="card">
                <h3>{{$movie->name}}</h3>
                <video id="my-video" class="video-js" controls preload="auto" width="100%" height="300" data-setup="{}">

                    <source src="http://video2.dev/{{$movie->file_path}}" type='video/mp4'> </video>
                <br>
                <p> <b>Actors:</b></p>
                @foreach($movie->actors as $act)
                    <ul class="list-group-item">

                        <li>{{$act->fname}} {{$act->lname}}</li>

                    </ul>

                @endforeach

                <p> <b>Categories:</b></p>

                @foreach($movie->category as $category)

                    <ul class="list-group-item">

                        <li> {{$category->genre}}</li>

                    </ul>

                @endforeach

            </div>
            @endforeach
        </div>

    </div>
</div>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
    </div>
</footer>


</body>
</html>
