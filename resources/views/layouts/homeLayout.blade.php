<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <title>Boolean Carreers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
      @include('elements.navbar')
      @yield('content')
    </body>
</html>
