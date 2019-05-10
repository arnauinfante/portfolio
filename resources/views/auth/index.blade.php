@extends('templates.master')

@section('title','Index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div  class="parallax-container">
                <div id="particles-JS" class="parallax">
                    <canvas class="particles-js-canvas-el" width="1583" height="497" style="width: 100%; height: 100%;"></canvas>
                </div>
            </div>
            <div class="section grey lighten-3">
                <div class="row container">
                    <div class="card large">
                        <div class="card-content">
                               <a name='Incio'></a> <span class="card-title">Presentación</span>
                        </div>
                    </div>
                    <div class="card large">
                        <div class="card-content">
                                <a name='Proyectos'></a> <span class="card-title">Proyectos</span>
                        </div>
                    </div>
                    <div class="card large">
                        <div class="card-content">
                                <a name='Curriculum'></a> <span class="card-title">Curriculum</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="modal1" class="modal">
        <div class="container">
            <div class="card medium">
                <div class="modal-content">
                    <h4 class="card-title">Login</h4>
                    <form action="{{ action('Auth\LoginController@login') }}" class="col m12" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-field">
                                <input id="username" name="username" type="text" class="validate">
                                <label for="username">username</label>
                            </div>
                            <div class="input-field">
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">password</label>
                            </div>
                        </div>
                        <div class="row white-text">
                                <a href="#!" class="modal-close waves-effect btn grey">cancelar</a>
                                <input type="submit" class="modal-close waves-green btn waves-effect" value="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('libs/particles_js/particles.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
