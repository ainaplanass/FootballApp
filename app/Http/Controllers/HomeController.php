<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function __invoke(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function index()
    {
       
        return view('menu');
    }
    
 
}
