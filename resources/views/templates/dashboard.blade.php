<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.min.css') }}"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{ asset('css/dashboard.css') }}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="{{ asset('libs/jQuery/jquery-3.3.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('libs/popper/popper.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
      <title>@yield('title')</title>

    </head>

    <body>
            <div class="page-announce valign-wrapper white-text z-depth-0">
                <a href="#" class="sidenav-trigger white-text show-on-large left" data-target="#mobile-nav">
                    <i class="material-icons">menu</i>
                </a>
                <h1 class="page-announce-text valign center-block">Dashboard</h1>
            </div>

            <div class="row">
                <ul class="sidenav sidenav-fixed l5 white-text grey darken-1 year-text z-depth-0" id="#mobile-nav">
                    <div class="container-fluid">
                            <li><div class="page-announce white-text grey darken-2 valign-wrapper z-depth-0">
                                    <a class="center-block"><i class="material-icons dash-icon white-text">dashboard</i></a>
                            </div>
                                </li>
                            <li><a href="{{ url('/') }}"><i class="material-icons">home</i>Inicio</a></li>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdownNavbar"><i class="material-icons">grid_on</i>Tablas<i class="material-icons right">arrow_drop_down</i></a></li>
                                <ul id='dropdownNavbar' class='dropdown-content transparent z-depth-0'>
                                    <li><a href="{{ url('/proyectos') }}">Proyectos</a></li>
                                    <li><a href="">Curriculum</a></li>
                                    <li><a href="{{ url('/lenguajes') }}">Lenguajes</a></li>
                                    <li><a href="{{ url('/idiomas') }}">Idiomas</a></li>
                                </ul>

                    </div>
                </ul>
            </div>
            <main>
                    @yield('content')
            </main>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="{{ asset('libs/materialize/js/materialize.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/events.js') }}"></script>
    </body>
  </html>
