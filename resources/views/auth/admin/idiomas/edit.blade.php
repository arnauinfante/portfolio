@extends('templates.dashboard')

@section('titulo','Idioma')

@section('content')
    <div class="container">
        <h4>Editar idioma</h4>
        <div class="row">
            <form action="{{ action('IdiomaController@update', [$idioma->id]) }}" method="POST" class="col s12">
                @method('put')
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" id="nombre" name="nombre" class="validate" value="{{ $idioma->nom }}">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="nivel" type="text" name="nivel" class="validate" value="{{ $idioma->nivell }}">
                        <label for="nivel">Nivel</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>EDITAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
