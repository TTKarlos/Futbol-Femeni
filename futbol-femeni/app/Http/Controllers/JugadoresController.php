<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadoresController extends Controller
{

    public function index() {
        $jugadores = [
            ['nom' => 'Alexia Putellas', 'equip' => 'Barça Femení', 'posicio' => 'Migcampista'],
            ['nom' => 'Esther González', 'equip' => 'Atlètic de Madrid', 'posicio' => 'Davantera'],
            ['nom' => 'Misa Rodríguez', 'equip' => 'Real Madrid Femení', 'posicio' => 'Portera'],
        ];
        return view('jugadores.index', compact('jugadores'));
    }
   
}
