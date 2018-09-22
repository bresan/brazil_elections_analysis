<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function index() {
        $usuarios = Usuario::all();
        return view('usuarios')->with('usuarios', $usuarios);
    }
}
