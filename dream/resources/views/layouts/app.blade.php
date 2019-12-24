<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MarketsNerwork') }}</title>
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
    
    <div id="app">
        <nav class="navbar blog-nav btn-default navbar-fixed-top">
            <div class="container-fluid">
                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            @include('partials.nav')
                        @else

                            @include('partials.auth.nav')

                           
                        @endguest
         </div>
        </nav>
        <div style="padding-top: 50px;">
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
