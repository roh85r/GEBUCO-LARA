<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('inscription');
    }

    public function store(Request $request)
    {
        // Valider les entrées du formulaire
        $validatedData = $request->validate([
            'matricule' => 'required|unique:users',
            'type_utilisateur' => 'required',
            'password' => 'required|min:6',
        ]);

        // Création d'un nouvel utilisateur
        $utilisateur = new Utilisateur;
        $utilisateur->matricule = $validatedData['matricule'];
        $utilisateur->type_utilisateur = $validatedData['type_utilisateur'];
        $utilisateur->password = bcrypt($validatedData['password']);
        $utilisateur->save();

        return view('inscription_success');
    }
}

