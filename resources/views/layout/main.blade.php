<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    @if (Auth::user()->role == 'user')
        <title>Eigentum user</title>
    @elseif (Auth::user()->role == 'developer')
        <title>Eigentum Developer</title>
    @elseif (Auth::user()->role == 'admin')
        <title>Eigentum Admin</title>
    @elseif (Auth::user()->role == 'agent')
        <title>Eigetum Agent</title>
    @endif

</head>

<body>
    @if (Auth::check())
    @endif

    @include('layout.partial.nav')
    @yield('content')
    @include('layout.partial.footer')


</body>

</html>
