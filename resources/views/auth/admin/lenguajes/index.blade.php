@extends('templates.dashboard')

@section('title','Lenguajes')

@section('content')

<div class="container">
    <h2 class="center">LENGUAJES</h2>
        <form action="{{ action('LenguajeController@create') }}" method="GET">

            <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>AÑADIR</button>
        </form>
        <table class="responsive-table">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Años</th>
                      <th></th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($lenguajes as $lenguaje)
                        <tr>
                            <td>{{ $lenguaje->id }}</td>
                            <td> {{ $lenguaje->nom }}</td>
                            <td>{{ $lenguaje->anys }}</td>
                            <td class="center td-edit">
                                <form action="{{ action('LenguajeController@edit', [$lenguaje->id]) }}" method="GET">
                                    <button class="btn-floating yellow darken-3" type="submit" name="action"><i class="material-icons right">edit</i></button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ action('LenguajeController@destroy', [$lenguaje->id]) }}" method="POST">
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
