<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}">

    {{-- Style Sheet --}}
    @include('frontend.partials.styles')

    <title> @yield('title', 'Blacker World') </title>
</head>

<body>

    {{-- Header Parts --}}
    @include('frontend.partials.header')


    {{-- All Content --}}
    @yield('content')


    {{-- Footer Parts --}}
    @include('frontend.partials.footer')

    {{-- All Javascripts --}}
    @include('frontend.partials.scripts')

</body>

</html>
