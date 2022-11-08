<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--csrf token--}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title','abc-shop')</title>
    {{--样式--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div id="app" class="{{route_class()}}-page">
        @include('layouts._header')
        <div class="container">
        @yield('content')
        </div>
        @include('layouts._footer')
    </div>
    {{--js 脚本--}}
    <script src="{{asset('js/app.js')}}"></script>
    @yield('scriptsAfterJs')
</body>
</html>
