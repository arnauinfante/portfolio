@extends('templates.dashboard')

@section('titulo','Proyecto')

@section('content')
    <div class="container">
        <h4>Editar proyecto</h4>
        <div class="row">
            <form action="{{ action('ProyectoController@update', [$proyecto->id]) }}" method="POST" class="col s12">
                @method('put')
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" id="nombre" name="nombre" class="validate" value="{{ $proyecto->nom }}">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="url" type="text" name="url" class="validate" value="{{ $proyecto->url }}">
                        <label for="url">URL</label>
                    </div>
                    <div class="input-field col s12 m6">
                            <textarea name="descripcion" id="descripcion" class="materialize-textarea"> {{ $proyecto->descripcio }}</textarea>
                            <label for="descripcion">Descripción</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select multiple name="lenguajes[]">
                            <option value="" disabled>Lenguajes...</option>
                            @foreach ($lenguajes as $lenguaje)
                                @foreach ($proyecto->lenguajes as $lenguaje_pro)
                                    @if ($lenguaje_pro->id == $lenguaje->id)
                                        <option value="{{ $lenguaje->id }}" selected> {{ $lenguaje->nom }}</option>
                                        {{ $encontrado = true }}
                                    @endif
                                @endforeach
                                @if (!$encontrado)
                                    <option value="{{ $lenguaje->id }}"> {{ $lenguaje->nom }}</option>
                                @endif
                                {{ $encontrado = false }}
                            @endforeach
                        </select>
                        <label>Lenguajes</label>
                    </div>
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>EDITAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
