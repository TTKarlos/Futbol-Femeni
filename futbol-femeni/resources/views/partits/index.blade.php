@vite('resources/css/jugadores.css')
@extends('layouts.app')

@section('title', 'Jugadores')

@section('content')
<h1>Partits</h1>
<table>
    <thead>
        <tr>
            <th>Local</th>
            <th>Visitant</th>
            <th>Data</th>
            <th>Resultat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($partits as $partit)
        <tr>
            <td>{{ $partit['local'] }}</td>
            <td>{{ $partit['visitant'] }}</td>
            <td>{{ $partit['data'] }}</td>
            <td>{{ $partit['resultat'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
