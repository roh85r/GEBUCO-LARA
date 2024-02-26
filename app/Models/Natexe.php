<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Natexe extends Model
{
    protected $table = 'NATEXE';
    protected $primaryKey = ['CEXE', 'CNAT']; // Tableau des clés primaires
    public $timestamps = false;
    protected $fillable = ['CEXE', 'CNAT']; // Remplir avec les attributs de la table NATEXE
    protected $hidden = [];
}
