@extends('templates.dashboard')

@section('title','Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card-panel teal white-text">
                <h3>{{ $proyectos }} </h3>
                <h4 class="white-text">Proyectos
                </h4>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel red darken-4 white-text">
                <h3>{{ $lenguajes }} </h3>
                <h4 class="white-text">Lenguajes
                </h4>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel yellow darken-3 white-text">
                <h3>{{ $idiomas }} </h3>
                <h4 class="white-text">Idiomas
                </h4>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel blue darken-3 white-text">
                <h3>{{ $lenguaje }} </h3>
                <h4 class="white-text">Lenguaje más usado
                </h4>
            </div>
        </div>
    </div>
</div>
@endsection
