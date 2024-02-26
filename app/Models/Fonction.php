<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    protected $table = 'FONCTION';
    protected $primaryKey = ['CFON']; // Définir les clés primaires
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['CFON', 'LIBFON']; // Remplir avec les attributs de la table FONCTION
    protected $hidden = [];
}
