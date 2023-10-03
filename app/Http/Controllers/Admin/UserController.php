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
        $users = User::all();
        $roles = Role::all();
        return view('users', compact('users', 'roles'));
    }

    public function assignRoles(Request $request, $userId)
    {
        if (auth()->check()) {
            $currentUser = auth()->user();
    
            if ($currentUser->hasRole('admin')) {
                $user = User::findOrFail($userId);
                $user->syncRoles($request->input('roles'));
    
                return redirect()->route('users')->with('success', 'Rol assignat correctament.');
            }
        }
        
        return redirect()->route('users')->with('success', 'No pots assignar rols....');
    }

    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }

  
    public function show(string $id)
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
