<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }
        </script>

        <title>Tubes PAW</title>
        <link rel="stylesheet"
        href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
        integrity="sha384-
        BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div id="app">
            <div class="container">
               <samsung></samsung>
            </div>
            
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
