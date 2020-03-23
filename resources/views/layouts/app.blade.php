<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HelpDesk</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <br>
            @include('inc.messages')
            @yield('content')
        </div>

    </body>
</html>