<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <title>eigentum</title>




</head>

<body>
    @if (Auth::check())
    @endif

    @include('layout.partial.nav')
    @yield('content')
    @include('layout.partial.footer')



    {{-- <div class="container py-1">
        @if (Auth::check())
        @endif
        @include('partial.nav')
        <div class="container">
            @yield('container')
        </div>
        @include('page.Home.home')
    </div> --}}

</body>



</html>
