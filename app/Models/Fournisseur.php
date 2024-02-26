<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $table = 'FOURNISSEUR';
    protected $primaryKey = 'CFOUR';
    public $timestamps = false;
    protected $fillable = ['CFOUR', 'LIBFOUR']; // Remplir avec les attributs de la table FOURNISSEUR
    protected $hidden = [];
}
