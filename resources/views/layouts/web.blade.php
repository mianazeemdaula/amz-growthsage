<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://unpkg.com/phosphor-icons"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <link rel="stylesheet" href="{{asset('/build/assets/app.css')}}">
    <title>Growth Sage</title>
</head>

<body>

    @yield('header')
    @yield('body')
    @yield('footer')

    <!-- scripts -->
    <script src="{{ asset("js/popper.min.js"></script> 
    <script src="{{ asset("js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset("js/rt-plugins.js"></script>
    @stack('js')
</body>

</html>