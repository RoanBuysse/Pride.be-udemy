<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pride.be') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript">
        var lang = "{{ LaravelLocalization::getCurrentLocale() }}";
        console.log(lang);
    </script>
</head>
<body>
    
    
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/mini_logo.png" class="img-fluid" alt="" width="65">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li><a class="nav-link" href="{{ url('/news') }}">News</a></li>
                             {{--  add correct link  --}}
                            <li><a class="nav-link" href="{{ url('/events') }}">Events</a></li>

                            <li><a class="nav-link" href="#">Over Ons</a></li>
                            
                            <!-- Authentication Links -->
                    @guest
                        <li><a class="btn btn-warning mijnProg" href="{{ route('login') }}">Login</a></li>
                        <li><a class="btn btn-warning mijnProg" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="btn btn-warning mijnProg dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{'Mijn Programma' }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item" href="{{ url('/admin') }}">Admin</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                          
                    </ul>



                    <!-- Right Side Of Navbar -->
                  
                    <ul class="navbar-nav ml-auto">
                           
                            <div class="dropdown justify-content-end">
                            <button style="text-transform:capitalize" class="btn btn-sm btn-danger dropdown-toggle mijnProg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                                   {{ app()->getLocale() }}
                            </button>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, $link = null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach
                                
                            </div>
                        </div>
                           
                        </ul>
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
       
    </div>


    <section id="footer">
            <div class="container">
              <div class="row text-center">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                  <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
                </hr>
              </div>	
              <div class="row text-center">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                  <p>The Belgian Pride VZW</p>
                  <p class="h6">&copy All rights reserved.</p>
                </div>
                </hr>
              </div>	
            </div>
     </section>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script>
        $('#tag_list').select2();
    </script>
  
    
    
</body>
</html>
    