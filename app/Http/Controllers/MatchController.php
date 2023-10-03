<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partit;
use App\Models\Equip;
use App\Models\Lliga;

class MatchController extends Controller
{
    

    public function matches()
    {
        $partits = Partit::all();
        return view('football.show_match', compact('partits'));
    }
    public function teamMatches($id)
    {
         $equip = Equip::find($id);
         $partits = Partit::where(function ($query) use ($id) {
            $query->where('equipLocal_id', $id)
                  ->orWhere('equipVisitant_id', $id);
        })->get();
         $equipsDispo = Equip::all();
         $lliguesDispo = Lliga::all();

         return view('football.matches', compact('partits','equip', 'equipsDispo','lliguesDispo')); 
    }

    public function storeMatch(Request $request, $id)
    {
       $partit = new Partit();

            $partit->data = $request->data;
            $partit->estadi = $request->estadi;
            $partit->equipLocal_id = $id;
            $partit->equipVisitant_id = $request->equipVisitant_id;
            $partit->lliga_id = $request->lliga_id;

            if ($request->has('resultat')) {
                $partit->resultat = $request->resultat;
            }
            if ($request->has('temps')) {
                $partit->temps = $request->temps;
            }
            
        $partit -> save();
       
        return redirect()->route('teams.show', ['id' => $id])
        ->with('success', 'Partit creat correctament');
   }
    public function updateMatch(Request $request,$id)
    {
        $partit = Partit::find($id);
        
        $request->validate([
            'data' => 'required',
            'estadi' => 'required',
            'equipVisitant_id' => 'required',
            'lliga_id' => 'required',
            'resultat' => 'required',
            'temps' => 'required',
        ]);
            $partit->data = $request->data;
            $partit->estadi = $request->estadi;
            $partit->equipVisitant_id = $request->equipVisitant_id;
            $partit->lliga_id = $request->lliga_id;

            if ($request->has('resultat')) {
                $partit->resultat = $request->resultat;
            }
            if ($request->has('temps')) {
                $partit->temps = $request->temps;
            }

        $partit -> save();
        return redirect()->route('teams.show', ['id' => $partit->equipLocal_id])
        ->with('success', 'Partit creat correctament');

   }

}

