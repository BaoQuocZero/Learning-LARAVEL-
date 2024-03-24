<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <!-- header -->
    @include('layouts.header')

    <!-- body -->
    <div class="container_fluid">
        @yield('main')
    </div>

    <!-- footer -->
    @include('layouts.footer')
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>

</html>