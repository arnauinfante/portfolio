@extends('templates.master')

@section('title','Index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="particles-js">
                <div class="row">
                    <div class="offset-1  caption">
                        <h1 class="grey-text text-lighten-3">Arnau Infante</h1>
                        <h4 class="grey-text text-lighten-3">Full stack web developer</h4>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="card large grey lighten-4">
                        <div class="card-content">
                               <a name='Incio'></a> <span class="card-title">Presentación</span>
                        </div>
                    </div>
                    <div class="card large grey lighten-4">
                        <div class="card-content">
                                <a name='Proyectos'></a> <span class="card-title">Proyectos</span>
                        </div>
                    </div>
                    <div class="card large grey lighten-4">
                        <div class="card-content">
                                <a name='Curriculum'></a> <span class="card-title">Curriculum</span>
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
    <script type="text/javascript" src="{{ asset('libs/particles_js/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
