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