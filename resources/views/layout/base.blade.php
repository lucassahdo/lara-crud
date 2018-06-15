<!DOCTYPE html>
<html lang="pt_br">
<head>
    <title>LARA - CRUD - PHP with Laravel 5.5.4</title>
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LaraCrud com Laravel 5.5.4">
    <meta name="author" content="Lucas Sahdo">

    @include('inc.styles.main')

    <!-- Specific -->
    @yield('styles')
</head>
<body>    
    @include('inc.header')
    @yield('content')
    @include('inc.footer')  	
    @include('inc.scripts.main')

    <!-- Specific -->
    @yield('scripts')
</body>
</html>
