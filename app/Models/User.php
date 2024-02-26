<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "UTILISATEUR_CONNEXION";

    protected $primaryKey = "ID_UTILISATEUR";

    protected $fillable = [
        "ID_UTILISATEUR",
        "MATRICULE",
        "TYPE_UTILISATEUR",
        "MOT_DE_PASSE"
    ];
}

