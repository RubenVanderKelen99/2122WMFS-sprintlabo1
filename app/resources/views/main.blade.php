<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
</head>
<body class="container">
@yield('contents')
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
</body>
</html>
