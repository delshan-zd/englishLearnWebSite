<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 5.7 CRUD Example Tutorial</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />


</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">Home</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=""> <a  href="{{route('unit.index')}}">unit</a></li>
            <li> <a   href="{{route('lesson.index')}}">lesson</a></li>
            <li> <a   href="{{route('grammer.index')}}">grammer examples</a></li>
            <li> <a   href="{{route('grammertype.index')}}">grammer</a></li>
            <li> <a   href="{{route('question.index')}}">excesisses</a></li>
            <li> <a   href="{{route('test.index')}}">test</a></li>
            <li> <a   href="{{route('verb.index')}}">urregular verbs</a></li>
            <li> <a   href="{{route('profile.create')}}">reports</a></li>



        </ul>
    </div>
</nav>


<div class="container">



    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>