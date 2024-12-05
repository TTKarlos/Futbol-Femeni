<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidaController extends Controller
{
    public function index() {
        $mensajeBienvenida = "Bienvenidos a Equipos de Futbol Femenino";
        return view('index', compact('mensajeBienvenida'));
    }
}
