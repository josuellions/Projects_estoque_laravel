@extends('layout.principal')

@section('conteudo')
<!-- <html lang="{{ app()->getLocale() }}"> -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login')) -->
                <div class="top-right links">
                    <!-- @if (Auth::check()) -->
                       <!--  <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/login') }}">Logout</a> -->
                    <!-- @else -->
                       <!--  <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a> -->
                    <!-- @endif -->
                </div>
            <!-- @endif -->

            <div class="content">
                <div class="title m-b-md">
                    Controle Estoque Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{asset ( 'js/home.js' ) }}" ></script>
                
@endsection
