
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$shop->name}}</title>
    <link rel="icon" href="{{ Storage::url($shop->front_image)}}" type="image/jpg"  sizes="36x36">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
     @include('partials.script')
    <!-- Fonts -->
    
    <!-- Styles -->
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
     @include('partials.style')
     
</head>
<body style="background-color: #eeeeee ;min-width:420px;">
    <div id="shop">
          
        <nav class="navbar blog-nav btn-default navbar-fixed-top">
            <div class="container-fluid">
                        @guest
                             @include('partials.shop.shop_nav')
                        
                        @else
                             @include('partials.shop.auth.shop_nav')

                        @endguest

         </div>
        </nav>
        <div style="padding-top: 75px;">
        </div>
        <main class="py-4">

            @yield('content')
            
        </main>
   
</div>
</body>
</html>
