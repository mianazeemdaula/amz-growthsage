<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <script src="https://unpkg.com/phosphor-icons"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Growth Sage</title>
</head>

<body>

    @yield('header')
    @yield('sidebar')
    <div class="responsive-body">
        @yield('body')
    </div>
    <script src="{{asset('js/sweetalert2@10.js')}}"></script>
    <script src="{{asset('js/responsive.js')}}"></script>
    @yield('script')

</body>

</html>