<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>FremontMI</title>
</head>
<body class="max-w-screen-xl mx-auto">

<nav class="flex justify-between items-center">
    <div class='text-3xl font-black'><span class='text-purple-700'>Fremont<span class='text-gray-800'>MI</span></span></div>
    <ul class="flex">
        <li class="ml-3"><a href="{{route('home')}}">Home</a></li>
        <li class="ml-3"><a href="">People</a></li>
        <li class="ml-3"><a href="">Events</a></li>
        <li class="ml-3"><a href="">Business</a></li>
        <li class="ml-3"><a href="">Login</a></li>
        <li class="ml-3"><a href="{{route('register')}}">Register</a></li>
    </ul>
</nav>

@yield('content')
</body>
</html>
