<!DOCTYPE html>
<html lang="en">
    <head>
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <meta name="_token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>Laravel 5.3 with Vuejs</title>
    </head>
    <body>
        <div id="app" class="container">
            <tasks></tasks>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
