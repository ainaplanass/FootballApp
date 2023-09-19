<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');
    }
    public function index(){
        return "BIENVENIDO AL ÍNDICE DE LA  PAGINA DE CURSOS";
    }
    public function welcome($curso){
    
        return view('cursos.show', ['curso'=>$curso]);

       

    }
}
