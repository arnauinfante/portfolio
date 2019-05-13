@extends('templates.master')

@section('title','Index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="particles-js">
                <div class="row">
                    <div class="offset-1  caption">
                        <h1 class="grey-text text-lighten-3">ARNAU INFANTE</h1>
                        <h4 class="grey-text text-lighten-3">Full stack developer</h4>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div id='Incio' class="card large grey lighten-4">
                        <div class="card-content">
                               <h4>Sobre mi</h4>
                        </div>
                    </div>
                    <div id='Proyectos' class="card large grey lighten-4">
                        <div class="card-content">
                                <h4>Proyectos</h4>
                        </div>
                    </div>
                    <div id="Curriculum" class="card large grey lighten-4">
                        <div class="card-content">
                                <h4>Curriculum</h4>
                        </div>
                    </div>
                </div>
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
    <script type="text/javascript" src="{{ asset('libs/particles_js/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
