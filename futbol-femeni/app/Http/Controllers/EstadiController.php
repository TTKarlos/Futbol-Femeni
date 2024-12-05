<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadiController extends Controller
{
    public function index() {
        $estadis = [
            [ 'estadi' => 'Camp Nou'],
            [ 'estadi' => 'Cívitas Metropolitano'],
            [ 'estadi' => 'Alfredo Di Stéfano'],
        ];
        return view('estadis.index', compact('estadis'));
    }

    public function crear(){
        return view('estadis.crear');
    }
}
