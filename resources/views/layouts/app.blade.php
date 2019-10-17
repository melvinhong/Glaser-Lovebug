<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: pink;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/cards.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="{{ url('/home') }}">Home</a>
  <a href="{{ url('/profile') }}">My Profile</a>
  <a href="{{ url('/settings') }}">Settings</a>
  <a href="{{ url('/messenger') }}">Messenger</a>
  <a href="{{ url('/about') }}">About Us</a>
  <a></a><a></a><a></a><a></a>
  <a></a><a></a><a></a><a></a>
  <a></a><a></a><a></a><a></a>
  <a></a><a></a><a></a><a></a>
  <a></a><a></a><a></a><a></a>
  <a></a><a></a><a></a><a></a>
  <a></a><a></a>
  <a href="{{ url('/admin') }}">Admin</a>
  <div class="copyright" id="copyright">
    &copy;

    <script>
      document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
    </script>, Copyright by LoveBug.
  </div>
</div>

<div id="main">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <!-- <div class="container"> -->
              <span style="font-size:20px; cursor:pointer;" onclick="openNav()">&#9776; LoveBug</span>
                <!-- <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'LoveBug') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <img src="../{{ Auth::user()->profile_image }}" style="width: 32px; height: 32px; border-radius: 50%; margin-right: 10px;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                  <a class="dropdown-item" href="{{ route('admin.impersonate.destroy') }}">
                                      <i class="fa fa-btn fa-times-rectangle"></i>
                                      {{ __('Stop Impersonating') }}
                                  </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-btn fa-sign-out"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          <div class="container">
            @include('alerts.alerts')
          </div>
            @yield('content')
        </main>

    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
</body>
</html>
