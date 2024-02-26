<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UtilisateurConnexion extends Model
{
    protected $table = 'UTILISATEUR_CONNEXION';

    protected $fillable = [
        'matricule',
        'type_utilisateur',
        'mot_de_passe'
    ];

    protected static function boot()
    {
        parent::boot();

        // Écouter l'événement 'creating' pour générer le matricule
        static::creating(function ($user) {
            $user->matricule = Str::random(6); // Générer un matricule aléatoire de 6 caractères
        });
    }
}
