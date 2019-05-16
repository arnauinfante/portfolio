@extends('templates.dashboard')

@section('titulo','Lenguajes')

@section('content')
    <div class="container">
        <h4>Editar lenguaje</h4>
        <div class="row">
            <form action="{{ action('LenguajeController@update', [$lenguaje->id]) }}" method="POST" class="col s12">
               @method('put')
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" id="nombre" name="nombre" class="validate" value="{{ $lenguaje->nom }}">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6">
                            <input type="number" id="años" name="años" class="validate" value="{{ $lenguaje->anys }}">
                            <label for="años">Años</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>EDITAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
