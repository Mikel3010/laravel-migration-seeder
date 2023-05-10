<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <h1>Lista Treni</h1>
        <div class="container">
            <ul>
                @foreach ($trains as $train)
                <li>Codice treno:{{$train->train_code}} <br> -Partenza:{{$train->departure_time}} <br> -Arrivo:{{$train->arrivale_time}}</li>  
                @endforeach
            </ul>
        </div>

    </body>
</html>
