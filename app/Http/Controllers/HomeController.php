<?php

namespace App\Http\Controllers;

use App\Models\Equip;
use App\Models\Partit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');
    }
    public function index(){

        $equips = Equip::all();

        return view ('football/index', compact('equips'));
        
    }
    public function show($nom)
    {
        $equip = Equip::where('nom', $nom)->firstOrFail();
        
        $equip->load('jugadors','entrenador','clubsEsportiu');

        $partits = Partit::where(function ($query) use ($equip) {
            $query->where('equipLocal_id', $equip->id)
                  ->orWhere('equipVisitant_id', $equip->id);
        })->get();
        return view('football.show', compact('equip','partits'));
    }
 
}
