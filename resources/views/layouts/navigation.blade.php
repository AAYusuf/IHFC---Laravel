@section('nav')
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="index.html"><span class="fa fa-podcast" aria-hidden="true"></span> <label class="lohny">I</label>HFC</a> --}}
          
        <a class="navbar-brand" href="#index.html">
            <img src="{{URL::asset('/images/logo.png')}}" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-a" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-a" href={{url('/about')}}>About</a>
                </li>
                <li class="nav-item">
                <a class="nav-a" href={{url('/services')}}>Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-a" href={{url('/halal')}}>Halal</a>
                </li>
                <li class="nav-item">
                <a class="nav-a" href={{url('/events')}}>Our Events</a>
                </li>
                <li class="nav-item">
                <a class="nav-a" href={{url('/gallery')}}>Gallery</a>
                </li>

            
                <li class="nav-item">
                <a class="nav-a" href="/contact">Contact</a>
                </li>
            </ul>
             <!-- Right Side Of Navbar -->
             {{-- <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul> --}}

        </div>
    </div>
</nav>
@endsection