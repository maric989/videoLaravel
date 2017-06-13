<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://vjs.zencdn.net/5.19.2/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <title>Document</title>
</head>
<body>

    @include('layouts.nav')
<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">The Video List</h1>
        <p class="lead blog-description">An example video template</p>


        @yield('content')

    </div>
</div>
    <script src="http://vjs.zencdn.net/5.19.2/video.js"></script>

</body>
</html>