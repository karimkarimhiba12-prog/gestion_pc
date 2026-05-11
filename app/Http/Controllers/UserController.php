<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // LIST
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    // SHOW CREATE
    public function create()
    {
        return view('admin.users.create');
    }

    // STORE
    public function store(Request $request)
    {
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'specialite' => $request->specialite,
            'charge_travail' => 0,
            'disponibilite' => $request->disponibilite,

        ]);

        return redirect('/admin/users')
               ->back()
               ->with('success', 'User a été créé');
    }

    // SHOW EDIT
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // UPDATE ✅ (CORRECT)
   public function update(Request $request, User $user)
{
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        'specialite' => $request->specialite,
        'disponibilite' => $request->disponibilite,
    ]);

    return redirect('/users')->with('success', 'User modifié avec succès');
}

    // DELETE
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')
               ->back()
               ->with('success', 'User supprimé');
    }
}