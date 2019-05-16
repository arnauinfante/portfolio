@extends('templates.dashboard')

@section('titulo','Lenguajes')

@section('content')
    <div class="container">
        <h4>Añadir lenguajes</h4>
        <div class="row">
            <form action="{{ action('LenguajeController@store') }}" method="POST" class="col s12">
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" id="nombre" name="nombre" class="validate">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6">
                            <input type="number" id="años" name="años" class="validate">
                            <label for="años">Años</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>AÑADIR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
