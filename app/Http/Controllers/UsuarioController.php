<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Seed\UsuarioCriado;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    //

    public function cadastro(){
        $users = DB::table('usuarios')->get();
        
        return view('dashboard', ['users' => $users]);
    }
    
}
