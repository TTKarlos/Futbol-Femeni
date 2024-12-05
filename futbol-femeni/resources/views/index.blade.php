@vite('resources/css/estadis.css')
@extends('layouts.app')

@section('title', 'Bienvenida')

@section('content')
<p><?= $mensajeBienvenida ?></p>
@endsection
