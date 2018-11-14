<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    
    <title>Laramon
        @if(View::hasSection('title'))
        :: {{ $title }}
        @endif   
    </title>
    
    <script src="{{ asset('/js/app.js') }}"></script>
    @yield('head_js')
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- View Styles -->
    @yield('css')
</head>
<body>
    @yield('content')
    @yield('body_js')
</body>
</html>