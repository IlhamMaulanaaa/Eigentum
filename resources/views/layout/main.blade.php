<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <title>eigentum</title>
    <link rel="stylesheet" href="/css/Home/home.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>

<body class="bg-light">
    <div class="container py-1">
        @if (Auth::check())
            @include('partial.nav')
            @endif
            
            {{-- @include('partial.nav')
            @include('partial.footer') --}}
            
            <div class="container">
                @yield('content')
            </div>
            @include('partial.footer')
    </div>


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


<script src="/js/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
<!-- JavaScript -->
<script src="/js/home.js"></script>
</html>
