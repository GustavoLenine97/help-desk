<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadosController extends Controller
{
    //Funções de cada página 

    public function dashboard(){
        $chamados = DB::table('chamados')->select('id','user_id','motivo')->get();
        return view('chamados',['chamados' => $chamados]);
    }

    public function search()
    {
        $chamados = DB::table('chamados')->where('motivo','Teclado')->first();
        echo $chamados->user_id;
    }

    public function searchMotivo($activated)
    {
        $chamadoMotivo = DB::table('chamados')->where(function ($query) use ($activated) {
            $query->where('motivo', '=', $activated);
        })->get();

        if(count($chamadoMotivo) === 0){
            echo 'Motivo não existe';
        } else {
            echo $chamadoMotivo[motivo];    
        }
    }

    public function cadastrar()
    {
        return view('chamados/cadastrar');
    }

}
