<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio website for Umer Mohammed">
    <meta name="author" content="Umer Mohammed">
    <meta name="keywords" content="Portfolio Project, Cybersecurity">

    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/c5cd4f3e40.js" crossorigin="anonymous"></script>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Any extra styles for indivdual pages -->
    @yield('style')

</head>

<body class="antialiased">

    @include('components/navbar')

    <main>

        <!-- Content that is to be layed out in a banner style and that will ignore the normal content layout -->
        <div id="bannercontent">

            @yield('bannercontent')
        </div>

        <!-- Content that is to be layed out to fit screensize and we want responsiveness beyond anything else -->
        <div class="container" id="maincontent">

            @yield('maincontent')
        </div>
    </main>


    @include('components/footer')

    <!-- bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Main Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Any additonal javascript needed for the page -->
    @yield('js')

</body>

</html>
