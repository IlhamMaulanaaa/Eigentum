<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/app.css">
    {{-- <!-- CSS only -->
    @if (Auth::user()->role == 'user')
        <title>Eigentum user</title>
    @elseif (Auth::user()->role == 'developer')
        <title>Eigentum Developer</title>
    @elseif (Auth::user()->role == 'admin')
        <title>Eigentum Admin</title>
    @elseif (Auth::user()->role == 'agent')
        <title>Eigetum Agent</title>
    @endif --}}

</head>

<body>
    @if (Auth::check())
    @endif

    @include('layout.partial.nav')
    @yield('content')
    @include('layout.partial.footer')


</body>



</html>
