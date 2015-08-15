<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning Laravel Website </title>
    <link rel="stylesheet" href="{{ URL::asset('public/assets/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/assets/css/style.css') }}">
    <script src="{{ URL::asset('public/assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('public/assets/bootstrap-3.3.5-dist/js/bootstrap.min.js') }}"></script>
</head>
<body>


<header>
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Learning Laravel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="./">Home</a></li>
                <li><a href="{{ action('TasksController@task') }}">Tasks</a></li>
                <li><a href="./about">About</a></li>
                <li><a href="./contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</header>

@yield('content')


</body>
</html>