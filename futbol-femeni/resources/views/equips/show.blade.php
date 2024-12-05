@extends('layouts.app')
@vite('resources/css/equips.css')
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
       
            <tr>
                <td>{{$equip['nom']}}</td>
                <td>{{$equip['estadi']}}</td>
                <td>{{$equip['titols']}}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('equips.index') }}" class="button">Volver</a>
@endsection
