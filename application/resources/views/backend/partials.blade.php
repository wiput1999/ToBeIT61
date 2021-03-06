<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{URL('/favicon.png')}}" type="image/x-icon"/>

    <title>Admin Panel | ToBeIT'61</title>

    <link rel="stylesheet" href="{{ mix('/2017/css/backend.css') }}">
</head>
<body>

    @include('backend.nav')
    <div class="container" id="backend-page">
        @yield('content')
    </div>

    <div class="fixed-bottom">
        <p id="login-footer">&copy; 2017 | ToBeIT'61</p>
    </div>

    <script src="{{ mix('/2017/js/jquery.min.js') }}"></script>
    <script src="{{ mix('/2017/js/popper.min.js') }}"></script>
    <script src="{{ mix('/2017/js/bootstrap.min.js') }}"></script>
    <script src="{{ mix('/2017/js/list.min.js') }}"></script>
    @yield('script')
</body>
</html>