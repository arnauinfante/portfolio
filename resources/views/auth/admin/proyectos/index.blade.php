@extends('templates.dashboard')

@section('title','Proyectos')

@section('content')

<div class="container">
    <h2 class="center">PROYECTOS</h2>
        <form action="{{ action('ProyectoController@create') }}" method="GET">

            <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>AÑADIR</button>
        </form>
        <table class="responsive-table">
                <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>URL</th>
                      <th>Descripción</th>
                      <th></th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                        <tr>
                            <td>{{ $proyecto->id }}</td>
                            <td> {{ $proyecto->nom }}</td>
                            <td>{{ $proyecto->url }}</td>
                            <td>{{ $proyecto->descripcio }}</td>
                            <td class="center td-edit">
                                <form action="{{ action('ProyectoController@edit', [$proyecto->id]) }}" method="GET">
                                    <button class="btn-floating yellow darken-3" type="submit" name="action"><i class="material-icons right">edit</i></button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ action('ProyectoController@destroy', [$proyecto->id]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-floating red darken-3" type="submit"><i class="material-icons right">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
</div>
@endsection
