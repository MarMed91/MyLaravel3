<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script type="{{ mix('js/script.js') }}"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>Laravel Header</title>
        </head>
    <body>
      @include('elem.header')
      @include('elem.content')
      @include('elem.footer')
    </body>
</html>
