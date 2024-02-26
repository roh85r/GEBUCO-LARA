<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'UTILISATEUR';
    protected $primaryKey = 'CUTIL';
    public $timestamps = false;
    protected $fillable = ['CUTIL', 'LIBUTIL']; // Remplir avec les attributs de la table UTILISATEUR
    protected $hidden = [];
}
