<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
     
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    
                    @guest
                    <a class="navbar-brand" href="{{ url('/') }}">
                        PROJECT E-COMMERCE
                     </a>  
                    @endguest                    
                    
                    @auth
                     @if(auth()->user()->admin)
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                       ADMIN DASHBOARD
                    </a>
                    @else 
                    <a class="navbar-brand" href="{{ url('/') }}">
                        PROJECT E-COMMERCE
                     </a>  
                    @endif
                    @endauth
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                      
                    </ul> 
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar">
                    @include('layouts.menu')
                    </ul>
                    </div>
 
                
            </div>
        </nav>
        
        <br>
        <div class="container">
        @include('admin.includes.info')
        </div>
    
           @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
    @yield('js')
</body>
</html>
