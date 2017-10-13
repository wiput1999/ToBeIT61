<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google" content="notranslate" />
        <meta name="description" content="@lang('meta.description')" />
        <link rel="shortcut icon" href="{{d_url('/favicon.png')}}" type="image/x-icon"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Title -->
        <title>@yield('title')ToBeIT61 KMITL</title>

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">


        <!-- Style -->
        <link rel="stylesheet" href="{{ d_asset(mix('/css/app.css')) }}">
        <!-- Js -->
        <script src="{{ d_asset(mix('/js/jquery.min.js')) }}"></script>
        <script src="{{ d_asset(mix('/js/landing.js')) }}"></script>
        <script src="{{ d_asset(mix('/js/scroll.js')) }}"></script>
        <script src="{{ d_asset(mix('/js/kube.min.js')) }}"></script>




    </head>

    <body>
        @include('layouts._header')
        <div class="content">
            @yield('content')
        </div>
        @include('layouts._footer')


    </body>
</html>
