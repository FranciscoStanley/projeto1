<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $usuario = "Francisco Stanley";
        $perfil = "Software Engineer";
        $empresa = "Google";

        $dados = [
            'usuario' => $usuario,
            'pefil' => $perfil,
            'empresa' => $empresa
        ];
 
        return view('home', $dados);

    }
}
