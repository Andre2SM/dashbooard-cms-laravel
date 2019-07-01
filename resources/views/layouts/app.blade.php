<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <title>Dashboard CMS</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">                  
    </head>
    <body>
        <div id="app">
            <v-app>
                  <master></master>   
            </v-app>
        </div>        
    <script src="{{ asset('js/app.js') }}"></script>    
    </body>
</html>