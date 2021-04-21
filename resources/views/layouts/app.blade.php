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

<nav class="my-4 flex justify-between items-center">
    <div class='text-3xl font-black'><a href="{{route('home')}}"><span class='text-purple-700'>Fremont<span
                    class='text-gray-800'>MI</span></span></a>
    </div>
    <ul class="flex text-lg font-semibold">
        <li class="ml-3"><a href="{{route('posts')}}">People</a></li>
        <li class="ml-3"><a href="">Events</a></li>
        <li class="ml-3"><a href="">Business</a></li>
        <li class="ml-3"><a href="{{route('dashboard')}}">Dashboard</a></li>
    </ul>
    <ul class="flex text-lg font-semibold">
        @auth
            <li class="ml-3"><a href="">{{auth()->user()->name}}</a></li>
            <li class="ml-3">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="text-lg">Logout</button>
                </form>
            </li>
        @endauth
        @guest
            <li class="ml-3"><a href="{{route('login')}}">Login</a></li>
            <li class="ml-3"><a href="{{route('register')}}">Register</a></li>
        @endguest
    </ul>
</nav>

@yield('content')
</body>
</html>
