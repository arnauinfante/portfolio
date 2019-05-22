@extends('templates.master')

@section('title','Index')

@section('content')
    <div id="particles-js">
        <div class="row">
            <div class="offset-1  caption">
                <h1 class="grey-text text-lighten-3">ARNAU INFANTE</h1>
                <h4 class="grey-text text-lighten-3">Full stack developer</h4>
            </div>
        </div>
    </div>
    <div id='Proyectos' class="pages grey-text text-lighten-3">
        <div class="container">
                <h4>Proyectos</h4>
                <div class="slider-container z-depth-2">
                    <div class="flexbox-slider flexbox-slider-2 proyectos">

                    </div>

                </div>
        </div>
    </div>
    <div id="Curriculum" class="pages grey-text text-lighten-3">
        <div class="container">
            <div class="row">
                <h4>Sobre mi</h4>
                <div class="col s12">
                  <ul class="tabs tabs-transparent">
                    <li class="tab col s3"><a href="#tab-estudios">Estudios</a></li>
                    <li class="tab col s3"><a href="#tab-idiomas">Idiomas</a></li>
                    <li class="tab col s3"><a href="#tab-lenguajes">Lenguajes</a></li>
                    <li class="tab col s3"><a href="#tab-frameworks">Frameworks</a></li>
                  </ul>
                </div>
                <div id="tab-estudios" class="col s12 tabs-height">
                  <div id="logo-container" class="col s12 m6">
                        <img id="logo" class="responsive-img" src="{{ asset('img/logo_web.png') }}" alt="">
                    </div>
                    <div class="col s12 m6 estudios">
                    </div>
                </div>
                <div id="tab-idiomas" class="col s12 tabs-height">
                    <div class="row idiomas center-block">
                    </div>
                </div>
                <div id="tab-lenguajes" class="col s12 tabs-height">
                    <div class="row">
                        <div class="col s12">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
                <div id="tab-frameworks" class="col s12 tabs-height"></div>
            </div>
        </div>
    </div>
    <div id="Contacto" class="pages grey-text text-lighten-3">
            <div class="container">
                    <h4>Contacto</h4>
                    <form action="" method="POST">

                    </form>
            </div>
    </div>
    <div id="modal1" class="modal">
        <div class="container">
            <div class="modal-content center">
                    <h5 class="modal-close right"><i class="material-icons">close</i></h5>
                <h4 class="center">Login</h4>
                <form action="{{ action('Auth\LoginController@login') }}" class="col m12 login" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <input id="username" name="username" type="text" class="validate">
                            <label for="username">username</label>
                        </div>
                        <div class="input-field">
                                <i class="material-icons prefix">lock</i>
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">password</label>
                        </div>
                    </div>
                    <div class="row white-text">
                            <input type="submit" class="waves-green btn waves-effect" value="login">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="{{ asset('libs/particles_js/particles.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
