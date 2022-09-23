<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basketbal</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-gradient-to-r from-red-500 via-purple-400 to-blue-600 text-white text-5xl">
    <ul class="flex p-4">
        <li class="flex-auto">
            Basketbalclub De Degelijke Dunker
        </li>
        <li>
            <a class="text-white hover:text-red-400" href="#">Lid worden</a>
        </li>
    </ul>
</div>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/">Info</a></li>
    <li><a href="{{ route('teams') }}">Teams</a></li>
    <li><a href="/">Jeugd</a></li>
    <li><a href="/">Nieuws en Media</a></li>
    <li><a href="/">Contact</a></li>
</ul>
@yield('content')
</body>
</html>
