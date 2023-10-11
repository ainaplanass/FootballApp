<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    public function usersList()
    {
        $usuaris = User::all();
        $rols = Role::all();
        return view('users', compact('usuaris', 'rols'));
    }

    public function assignRoles(Request $request, $userId)
    {
    
                $usuari = User::findOrFail($userId);
                $usuari->syncRoles($request->input('roles'));
    
                return redirect()->route('users.list')->with('success', 'Rol assignat correctament.');
    }

  
    public function create()
    {
        
    }

 
    public function edit(string $id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {
        
    }

  
    public function destroy(string $id)
    {
        
    }
}
