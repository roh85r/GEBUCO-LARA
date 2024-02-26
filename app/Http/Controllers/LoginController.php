<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validation des données du formulaire
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'type_utilisateur' => ['required', 'in:Administrateur,Ordonnateur,Controleur Budgetaire,Comptable'],
        ]);

        // Tentative d'authentification de l'utilisateur
        if (Auth::attempt($credentials)) {
            // Authentification réussie, rediriger en fonction du type d'utilisateur
            $redirectTo = $this->redirectTo(Auth::user()->type_utilisateur);
            return redirect()->intended($redirectTo);
        } else {
            // Échec de l'authentification, rediriger avec un message d'erreur
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ])->redirectTo(route('login'))->withInput($request->only('email'));
        }
    }

    // Méthode pour déterminer la redirection en fonction du type d'utilisateur
    protected function redirectTo($type_utilisateur)
    {
        switch ($type_utilisateur) {
            case 'Administrateur':
                return route('dashboard.admin');
                break;
            case 'Ordonnateur':
                return route('dashboard.ordonnateur');
                break;
            case 'Controleur Budgetaire':
                return route('dashboard.controleur_budgetaire');
                break;
            case 'Comptable':
                return route('dashboard.comptable');
                break;
            default:
                return route('login');
                break;
        }
    }

    // Méthode pour déconnecter l'utilisateur
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
