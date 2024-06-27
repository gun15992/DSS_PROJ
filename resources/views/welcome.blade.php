<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resorces/js/app.js')
    </head>
    <body>
        <div id="app">
            <h1>Test</h1>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
