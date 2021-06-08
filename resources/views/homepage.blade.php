<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        {{-- commento a sintassi blade, non visibile devtols --}}
        {{-- Main Styles --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body>
        <header>

            <div class="container">

                <a href="/">logo</a>

                <a href="">Comics</a>

                <a href="">News</a>

                <h2>Benvenuto {{$user}}</h2>
            </div>

        </header>


        {{-- js --}}

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
