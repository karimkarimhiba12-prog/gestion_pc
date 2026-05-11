<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\User;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    // =====================
    // LIST POSTES
    // =====================
 public function index()
{
    $postes = Poste::with('user')->get();

    return view('admin.postes.index', compact('postes'));
}

    // =====================
    // CREATE FORM
    // =====================


public function create()
{
    $users = User::all();

    return view('admin.postes.create', compact('users'));
}

    // =====================
    // STORE POSTE
    // =====================
public function store(Request $request)
{
    $request->validate([
        'numero_serie' => 'required|unique:postes',
        'modele' => 'required',
        'etat' => 'required',
        'emplacement' => 'required',
        'user_id' => 'nullable|exists:users,id',
    ]);

    Poste::create([
        'numero_serie' => $request->numero_serie,
        'modele' => $request->modele,
        'etat' => $request->etat,
        'emplacement' => $request->emplacement,
        'user_id' => $request->user_id,
    ]);

    return redirect()->route('postes.index');
}

    // =====================
    // EDIT FORM
    // =====================
    public function edit(Poste $poste)
    {
        $postes = Poste::all();

        return view('postes.edit', compact('poste', 'postes'));
    }

    // =====================
    // UPDATE POSTE
    // =====================
public function update(Request $request, Poste $poste)
{
    $poste->update([
        'numero_serie' => $request->numero_serie,
        'modele' => $request->modele,
        'etat' => $request->etat,
        'user_id' => $request->user_id,
    ]);

    return redirect()->route('postes.index');
}

    // =====================
    // DELETE POSTE
    // =====================
    public function destroy(Poste $poste)
    {
        $poste->delete();

        return redirect('/postes');
    }
}