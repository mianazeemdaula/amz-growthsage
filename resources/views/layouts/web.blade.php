<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/phosphor-icons"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Growth Sage</title>
</head>

<body>

    @yield('header')
    @yield('body')
    @yield('footer')
    <script src="{{asset('js/sweetalert2@10.js')}}"></script>
    <script src="{{asset('js/subscription.js')}}"></script>
    @yield('script')

</body>

</html>