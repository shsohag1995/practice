<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png"  sizes="56x56">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
     @include('partials.script')
    <!-- Fonts -->
    
    <!-- Styles -->
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
     @include('partials.style')
     
</head>
<body style="background-color: #eeeeee">
    
    <div id="ceo">
        <nav class="navbar blog-nav btn-default navbar-fixed-top">
            <div class="container-fluid">

            @include('partials.ceo.nav')  
             
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
