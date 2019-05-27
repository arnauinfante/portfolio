@extends('templates.dashboard')

@section('title','Dashboard')

@section('content')
<div class="container">
        <h2 class="center">CONTACTO</h2>
        @if ($contactos->isEmpty())
            <h2 class="center"> No hay ningún contacto</h2>
        @else
            <table class="responsive-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($contactos as $contacto)
                        <tr>
                            <td>{{ $contacto->id }}</td>
                            <td> {{ $contacto->name }}</td>
                            <td>{{ $contacto->email }}</td>
                            <td>{{ $contacto->message }}</td>
                            <td>
                                <form action="{{ action('HomeController@destroy', [$contacto->id]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-floating red darken-3" type="submit"><i class="material-icons right">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
</div>
@endsection
