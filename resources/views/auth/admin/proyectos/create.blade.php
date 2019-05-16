@extends('templates.dashboard')

@section('titulo','Proyecto')

@section('content')
    <div class="container">
        <h4>Añadir proyecto</h4>
        <div class="row">
            <form action="{{ action('ProyectoController@store') }}" method="POST" class="col s12">
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" id="nombre" name="nombre" class="validate">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="url" type="text" name="url" class="validate">
                        <label for="url">URL</label>
                    </div>
                    <div class="input-field col s12 m6">
                            <textarea name="descripcion" id="descripcion" class="materialize-textarea"></textarea>
                            <label for="descripcion">Descripción</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select multiple name="lenguajes[]">
                            <option value="" disabled>Lenguajes...</option>
                           @foreach ($lenguajes as $lenguaje)
                               <option value="{{ $lenguaje->id }}"> {{ $lenguaje->nom }}</option>
                           @endforeach
                        </select>
                        <label>Lenguajes</label>
                    </div>
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>AÑADIR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
