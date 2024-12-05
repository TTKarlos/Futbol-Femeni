@vite('resources/css/estadis.css')
@extends('layouts.app')

@section('title', 'Estadis')

@section('content')
<h1>Estadis</h1>
<table>
    <thead>
        <tr>
            <th>Estadios</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estadis as $estadi)
        <tr>
            <td>{{ $estadi['estadi'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
