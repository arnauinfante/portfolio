@extends('templates.dashboard')

@section('title','Idiomas')

@section('content')

<div class="container">
    <h2 class="center">IDIOMAS</h2>
        <form action="{{ action('IdiomaController@create') }}" method="GET">

            <button class="btn waves-effect waves-light btn-small" type="submit" name="action"><i class="material-icons right">add_circle</i>AÑADIR</button>
        </form>
        <table class="responsive-table">
                <thead>
                  <tr>
                      <th>Idioma</th>
                      <th>Nivel</th>
                      <th></th>
                      <th></th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($idiomas as $idioma)
                        <tr>
                            <td> {{ $idioma->nom }}</td>
                            <td>{{ $idioma->nivell }}</td>
                            <td class="center td-edit">
                                <form action="{{ action('IdiomaController@edit', [$idioma->id]) }}" method="GET">
                                    <button class="btn-floating yellow darken-3" type="submit" name="action"><i class="material-icons right">edit</i></button>
                                    {{-- <button class="btn waves-effect waves-light btn-small yellow darken-3" type="submit" name="action"><i class="material-icons right">edit</i>EDITAR </button> --}}
                                </form>
                            </td>
                            <td>
                                <form action="{{ action('IdiomaController@destroy', [$idioma->id]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-floating red darken-3" type="submit"><i class="material-icons right">delete</i></button>
                                    {{-- <button class="btn waves-effect waves-light btn-small red darken-3" type="submit"><i class="material-icons right">remove_circle</i>BORRAR</button> --}}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
</div>
@endsection
