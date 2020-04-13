<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>


<!-- stylesheets css -->

<link rel="stylesheet" href="{{ url('website/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ url('website/css/animate.min.css')}}">

<link rel="stylesheet" href="{{ url('website/css/et-line-font.css')}}">
<link rel="stylesheet" href="{{ url('website/css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{ url('website/css/vegas.min.css')}}">

<link rel="stylesheet" href="{{ url('website/css/style.css')}}">
<link rel="stylesheet" href="{{ url('website/css/animate.css')}}">
<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-default navbar-fixed-top">
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
                    <a class="navbar-brand" href="{{url('/')}}">
                      PROJECT E-COMMERCE
                    </a>
                </div>
 
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                      
                    </ul> 
 
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- @include('layouts.menu') -->

                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{url('#home')}}">Home</a></li>
                            <li><a href="{{url('#about')}}">About</a></li>
                            <li><a href="{{url('#feature')}}">Servise</a></li>
                            <li><a href="{{url('#contact1')}}">Products</a></li>
                            <li><a href="{{url('#content')}}">Content</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
               
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 
   <!-- preloader section -->
   <section class="preloader">
	  <div class="sk-circle">
       <div class="sk-circle1 sk-child"></div>
       <div class="sk-circle2 sk-child"></div>
       <div class="sk-circle3 sk-child"></div>
       <div class="sk-circle4 sk-child"></div>
       <div class="sk-circle5 sk-child"></div>
       <div class="sk-circle6 sk-child"></div>
       <div class="sk-circle7 sk-child"></div>
       <div class="sk-circle8 sk-child"></div>
       <div class="sk-circle9 sk-child"></div>
       <div class="sk-circle10 sk-child"></div>
       <div class="sk-circle11 sk-child"></div>
       <div class="sk-circle12 sk-child"></div>
     </div>
    </section>

<!-- home section -->
<section id="home">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="home-thumb">
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">Hello, we are Handmade products</h1>
                        <h3 class="wow fadeInUp" data-wow-delay="0.6s">growing productes provider of <strong>ACCESSORIES, Scarf and Bags </strong> our <strong>building unique products</strong> website!</h3>
                        <a href="{{ url('#about') }}"><div class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">Let's begin</div></a>
                
                    </div>
                </div>

            </div>
        </div>		
    </section>

    <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <p class="h1">Happy Shopping</p>
                        <p class="lead">Online shopping makes everything so much easier.</p>
                    </div>
                </div>
        </section>

        </div>

    <section id="about">
    <div class="container">
        <div class="row">
    <header class="section-header">
      <h3 class="section-title">About Us</h3>
    </header>
    <div class="col-md-6 col-sm-12">
        <img src="/website/images/about-img.jpg" class="img-responsive wow fadeInUp" alt="About">
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="about-thumb">
            
            <div class="wow fadeInUp" data-wow-delay="0.6s">
                <b><h3>Online site for the purchase of handmade products</h3></b>
               
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.6s">
                <b><h3>It is easy to find anything handmade and buy it easily</h3></b>
               
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.6s">
                <b><h3>It 's good to buy an audio product because it' s the best</h3></b>
               
            </div>
        </div>
    </div>
</div>
</div>
     </section>


      <!-- feature section -->
    <section id="feature">
    <div class="row">
    <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
        <path d="M0 0 L50 100 L100 0 Z"></path>
    </svg>
    <div class="container">
        
			<div class="col-md-3 col-sm-9">
				<div class="media wow fadeInUp" data-wow-delay="0.6s">
				
				<div class="media-body">
					<h2 class="media-heading">ACCESSORIES </h2>
					<p>ACCESSORIESACCES SORIES ACCESSORIES ACCESSORIES ACCESSORIES </p>
				</div>
				</div>
			</div>

            <div class="col-md-3 col-sm-9">
				<div class="media wow fadeInUp" data-wow-delay="0.6s">
				
				<div class="media-body">
					<h2 class="media-heading">Scarf </h2>
					<p>Scarf Scarf Scarf Scarf ScarfScarfScarf Scarf Scarf Scarf Scarf</p>
				</div>
				</div>
			</div>

            <div class="col-md-3 col-sm-9">
				<div class="media wow fadeInUp" data-wow-delay="0.6s">
				
				<div class="media-body">
					<h2 class="media-heading">Scarf </h2>
					<p>Scarf Scarf Scarf Scarf ScarfScarfScarf Scarf Scarf Scarf Scarf</p>
				</div>
				</div>
			</div>

            <div class="col-md-3 col-sm-9">
				<div class="media wow fadeInUp" data-wow-delay="0.6s">
				
				<div class="media-body">
					<h2 class="media-heading"> And More </h2>
					<p>And More And MoreAnd MoreAnd MoreAnd More And MoreAnd MoreAnd More And More And More</p>
				</div>
				</div>
			</div>
			
            	
		
   
    <div class="clearfix text-center col-md-12 col-sm-12">
          <a href="{{ url('#contact') }}" ><div class="btn btn-default smoothScroll">Talk to us</div></a>
        </div>

    </div>
        
    </div>
    </section>

    <section id="contact1" style="background-color: #f7f7f7">
    @include('admin.includes.info')
           @yield('content')
    </section>

    <section id="content" style="background-color: #f7f7f7">

    @include('layouts.includes.footer')
</section>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
    @yield('js')

    <!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>





    

    
    <script type="application/javascript">
        function deleteThisItem(e){
            var link = $(e).data('link');
            swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this Item Again!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function(){
                        window.location = link;
                    });
        }
    </script>


    <!-- javscript js -->
    <script src="{{ url('website/js/jquery.js')}}"></script>
    <script src="{{ url('website/js/bootstrap.min.js')}}"></script>

    <script src="{{ url('website/js/vegas.min.js')}}"></script>

    <script src="{{ url('website/js/wow.min.js')}}"></script>
    <script src="{{ url('website/js/smoothscroll.js')}}"></script>
    <script src="{{ url('website/js/custom.js')}}"></script>
    

</body>
</html>

