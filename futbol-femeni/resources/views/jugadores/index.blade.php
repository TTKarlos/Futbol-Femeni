@vite('resources/css/jugadores.css')
@extends('layouts.app')

@section('title', 'Jugadores')

@section('content')
<h1>Jugadores</h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Equipo</th>
            <th>Posición</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jugadores as $jugador)
        <tr>
            <td>{{ $jugador['nom'] }}</td>
            <td>{{ $jugador['equip'] }}</td>
            <td>{{ $jugador['posicio'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
