@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<h1>Guia d'Equips</h1>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Estadi</th>
        <th>Títols</th>
    </tr>
    </thead>
    <tbody>
    @foreach($equips as $key => $equip)
    <tr>
        <td>
            <a href="{{ route('equips.show', $key) }}" class="text-blue-700 hover:underline">{{ $equip['nom'] }}</a>
        </td>
        <td>{{ $equip['estadi'] }}</td>
        <td>{{ $equip['titols'] }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection