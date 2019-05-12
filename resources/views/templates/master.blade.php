<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.min.css') }}"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{ asset('css/master.css') }}"  media="screen,projection"/>


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="{{ asset('libs/jQuery/jquery-3.3.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('libs/popper/popper.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
      <title>@yield('title')</title>

    </head>

    <body>
        <div class="navbar-fixed">
            <nav class="white-text transparent z-depth-0">
                <div class="nav-wrapper">
                    <div class="container">
                    {{-- <a href="{{ url('/') }}" class="brand-logo" style="padding: 0px 10px;">Logo</a> --}}
                    <a href="#" class="sidenav-trigger" data-target="#mobile-nav">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="#Proyectos">Proyectos</a></li>
                        <li><a href="#Curriculum">Curriculum</a></li>
                        @if(Auth::check() )
                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdownNavbar">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                            <ul id='dropdownNavbar' class='dropdown-content transparent z-depth-0'>
                                <li><a class="white-text" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        @else
                            <li><a class="modal-trigger" href="#modal1">Login</a></li>
                        @endif
                    </ul>
                </div>
                </div>
            </nav>
        </div>
        <ul class="sidenav white-text year-text" id="#mobile-nav">
            <li><div class="user-view">
                    <div class="background">
                    </div>
                </div>
            </li>
            <li><a class="grey-text text-lighten-3" href="{{ url('/') }}">Inicio</a></li>
            <li><a class="grey-text text-lighten-3" href="#Proyectos">Proyectos</a></li>
            <li><a class="grey-text text-lighten-3" href="#Curriculum">Curriculum</a></li>
            @if(Auth::check())
                <li><a class="grey-text text-lighten-3" href="{{ route('home') }}">Dashboard</a></li>
                <li><a class="dropdown-trigger grey-text text-lighten-3" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons grey-text text-lighten-3 right">arrow_drop_down</i></a></li>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a class="grey-text text-lighten-3" href="{{ route('logout') }}">Logout</a></li>
            </ul>
            @else
                <li><a class="modal-trigger white-text" href="#modal1">Login</a></li>
            @endif
        </ul>
          @yield('content')
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="{{ asset('libs/materialize/js/materialize.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/events.js') }}"></script>
      @yield('js')
    </body>
  </html>
