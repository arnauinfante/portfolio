@extends('templates.dashboard')

@section('titulo','Idioma')

@section('content')
    <div class="container">
        <h4>Añadir idioma</h4>
        <div class="row">
            <form action="{{ action('IdiomaController@store') }}" method="POST" class="col s12">
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" id="nombre" name="nombre" class="validate">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="nivel" type="text" name="nivel" class="validate">
                        <label for="nivel">Nivel</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>AÑADIR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
