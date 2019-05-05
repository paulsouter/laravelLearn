<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'Learn')}}</title>


    </head>
    <body>
        @include('inc/menu')
        <div class="container">
                <div class='padding'></div>
        @yield('content')
        </div>
        
    </body>
</html>



