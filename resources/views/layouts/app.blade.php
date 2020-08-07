<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" async></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/open-iconic/font/css/open-iconic-foundation.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   
    <style>
        body{
            background: url('{{asset('images/bg.jpg')}}')!important;
            background-size:cover!important;
            background-repeat:no-repeat no-repeat!important;
            background-position:center center!important;
            background-attachment:fixed!important;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">
        

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      
                     
                        <li class="nav-item">
                                <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/"><i class="fas fa-home"></i> {{ __('Home') }}</a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link {{Request::is('score') ? 'active' : ''}}" href="/score"><i class="fas fa-poll-h"></i> {{ __('Scores') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('season') ? 'active' : ''}}" href="/season"><i class="fas fa-layer-group"></i> {{ __('Seasons') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('rankings') ? 'active' : ''}}" href="/rankings"><i class="fas fa-table"></i> {{ __('Ranking List') }}</a>
                            </li>
                           
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
           
            @yield('content')
        
        </main>
    </div>
    <script>
        function areYouSure(){
            var x = confirm("Are you sure you want to delete this item?");
            if(x){
                return true;
            }
            else{
                return false;
            }
            
        }
    </script>


</body>
</html>
