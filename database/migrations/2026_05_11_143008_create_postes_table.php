<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\User;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    // LIST
    public function index()
    {
        $postes = Poste::with('user')->get();
        return view('admin.postes.index', compact('postes'));
    }

    // CREATE PAGE
    public function create()
    {
        $users = User::all();
        return view('admin.postes.create', compact('users'));
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'numero_serie' => 'required|unique:postes',
            'modele' => 'required',
            'etat' => 'required',
            'emplacement' => 'required',
            'user_id' => 'nullable',
        ]);

        Poste::create($request->all());

        return redirect()->route('postes.index');
    }

    // EDIT PAGE
    public function edit(Poste $poste)
    {
        $users = User::all();
        return view('admin.postes.edit', compact('poste', 'users'));
    }

    // UPDATE
    public function update(Request $request, Poste $poste)
    {
        $request->validate([
            'numero_serie' => 'required',
            'modele' => 'required',
            'etat' => 'required',
            'emplacement' => 'required',
        ]);

        $poste->update([
            'numero_serie' => $request->numero_serie,
            'modele' => $request->modele,
            'etat' => $request->etat,
            'emplacement' => $request->emplacement,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('postes.index');
    }

    // DELETE
    public function destroy(Poste $poste)
    {
        $poste->delete();
        return redirect()->route('postes.index');
    }
}