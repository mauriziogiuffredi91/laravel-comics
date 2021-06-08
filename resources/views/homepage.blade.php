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

               
                <a class="special-a" href="/">logo</a>
                <a class="special-a" href="">Comics</a>
                <a class="special-a" href="">News</a>
                    
            </div>

        </header>

                
                




        {{-- js --}}

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
                

                

                
