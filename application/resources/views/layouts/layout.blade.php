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
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Title -->
        <title>@yield('title')ToBeIT61 KMITL</title>

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">


        <!-- Style -->
        {{ HTML::style('css/layout.min.css') }}
        {{ HTML::style('css/header.min.css') }}
        {{ HTML::style('css/landing.min.css') }}
        {{ HTML::style('css/signup.min.css') }}
        {{ HTML::style('kube/dist/css/kube.css') }}

        <!-- Js -->
        {{ HTML::script('js/jquery.js') }}
        {{ HTML::script('js/jquery-ui.js') }}
        {{ HTML::script('js/layout.js') }}
        {{ HTML::script('js/landing.js') }}
        {{ HTML::script('js/scroll.js') }}
        {{ HTML::script('kube/dist/js/kube.min.js') }}




    </head>

    <body>
        @include('layouts._header')
        <div class="content">
            @yield('content')
        </div>
        @include('layouts._footer')


    </body>
</html>
