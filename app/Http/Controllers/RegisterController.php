<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtilisateurConnexion;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        try {
            // Validation des données entrées par l'utilisateur
            $validatedData = $request->validate([
                'type_utilisateur' => 'required',
                'password' => 'required|min:6',
            ]);

            // Création d'une nouvelle instance de UtilisateurConnexion
            $user = new UtilisateurConnexion();

            // Remplissage des champs du modèle
            $user->type_utilisateur = $validatedData['type_utilisateur'];
            $user->mot_de_passe = Hash::make($validatedData['password']); // Hasher le mot de passe

            // Sauvegarde de l'utilisateur
            $user->save();

            Log::info('Nouvel utilisateur créé ! Matricule: ' . $user->matricule);

            // Redirection avec un message de succès
            return redirect()->back()->withSuccess('Utilisateur enregistré avec succès !');
        } catch (\Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            Log::error('Erreur lors de l\'enregistrement de l\'utilisateur : ' . $e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Une erreur est survenue lors de l\'enregistrement de l\'utilisateur. Veuillez réessayer.']);
        }
    }
}
