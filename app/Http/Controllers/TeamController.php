<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equip;
use App\Models\Partit;
use App\Models\Entrenador;
use App\Models\Jugador;
use App\Models\ClubsEsportiu;

class TeamController extends Controller
{

    public function index(Request $request){

        $clubs = ClubsEsportiu::all();

        $clubEsportiuId = $request->input('club_esportiu');
    
        if ($clubEsportiuId) {
            $equips = Equip::where('clubs_esportius_id', $clubEsportiuId)->get();
        } else {
            $equips = Equip::all();
        }

        return view ('football.index', compact('equips','clubs'));
        
    }
    public function teams(){

        $equips = Equip::all();
        $clubs = ClubsEsportiu::all();
        return view ('football.team', compact('clubs','equips'));
        
    }
    public function showTeam($id)
    {
        $equip = Equip::where('id', $id)->firstOrFail();
        
        $equip->load('jugadors','entrenador','clubsEsportiu');

        $partits = Partit::where(function ($query) use ($equip) {
            $query->where('equipLocal_id', $equip->id)
                  ->orWhere('equipVisitant_id', $equip->id);
        })->get();
        return view('football.show_team', compact('equip','partits'));
    }
    public function team($id)
    {
        $equip = Equip::find($id);
        $jugadors = $equip->jugadors;        
        $entrenadors = $equip->entrenador;        
        return view('football.players', compact('jugadors','equip','entrenadors'));
    }
    public function storeTeam(Request $request)
    {
        $equip = new Equip();
        $equip->nom = $request->nom;
        $equip->clubs_esportius_id = $request->clubs_esportius_id;
        $equip->save();
     
        return redirect()->route('index')
            ->with('success', 'Equip creat exitosament.');     
    }
    public function storePlayer(Request $request, $id)
    {
        $equip = Equip::find($id);
        $jugador = new Jugador();
        $jugador->nom = $request->nom;
        $jugador->edat = $request->edat;
        $jugador->num = $request->num;
        $jugador->posicio = $request->posicio;
        $jugador->equip_id = $id;

        $jugador->save();

        return redirect()->route('teams.show', ['id' => $equip->id])
        ->with('success', 'Jugador creat correctament');
    }
    public function destroyTeam(Request $request)
    {
        $selectedTeamId = $request->input('selectedTeamId');

        if ($selectedTeamId) {
            $equip = Equip::find($selectedTeamId);
            $equip->delete();
            return redirect()->route('index')
            ->with('success', 'Equip eliminat correctament');
        }
     
    }
    
    public function updatePlayer(Request $request, Jugador $jugador)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'edat' => 'required|integer',
            'num' => 'required|integer',
            'posicio' => 'required|string|max:255',
        ]);

        $jugador->nom = $request->nom;
        $jugador->edat = $request->edat;
        $jugador->num = $request->num;
        $jugador->posicio = $request->posicio;
        $jugador->save();

        return redirect()->route('teams.show', ['id' => $jugador->equip_id])
            ->with('success', 'Jugador actuaitzat correctament');
    }
    public function destroyPlayer($id)
    {
        $jugador = Jugador::findOrFail($id);
        $jugador->delete();
    
        return redirect()->route('teams.show', ['id' => $jugador->equip_id])
            ->with('success', 'Jugador eliminat correctament');
    }
    public function storeTrainer(Request $request, $id)
    {
        $equip = Equip::find($id);
        $entrenador = new Entrenador();
        $entrenador->nom = $request->nom;
        $entrenador->equip_id = $id;

        $entrenador->save();

        return redirect()->route('teams.show', ['id' => $equip->id])
        ->with('success', 'Jugador creat correctament');
    }
    public function destroyTrainer($id)
    {
        $entrenador = Entrenador::findOrFail($id);
        $entrenador->delete();
    
        return redirect()->route('teams.show', ['id' => $entrenador->equip_id])
            ->with('success', 'Jugador eliminat correctament');
    }
 
}

