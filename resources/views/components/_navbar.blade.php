    <nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-black py-0 fixed-top">
        <div class="container-fluid">
            <img src="./img/logo.png" class="img-fluid px-2 " style="height: 40px;" alt="">
            <a id="navbarBrand" class="h2 text-white pr-3 mt-2 " href="{{ url('/') }}">
                Get a Beer!
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span><i class="fas fa-chevron-circle-down text-white" id="togglerIcon"></i></span>
            </button>

            <div class="collapse navbar-collapse bg-black" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto mt-3">
                    <li class="nav-item ">
                        <a class="nav-link h5 text-white px-md-3"  href="{{route('brewery.breweries')}}">Le Birrerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5 text-white  px-md-3" href="{{route('project')}}">Il progetto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5 text-white  px-md-3" href="{{route('team')}}">Il Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5 text-white  px-md-3" href="{{route('contact.contacts')}}">Contattaci</a>
                    </li>
                </ul>

                <hr class="hr-white d-md-none">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link  text-white h5" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link  text-white h5" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle ext-right text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

   
