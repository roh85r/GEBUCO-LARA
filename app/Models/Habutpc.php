<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habutpc extends Model
{
    protected $table = 'HABUTPC';
    protected $primaryKey = ['CHAB', 'CUT', 'CPC']; // Définir les trois clés primaires
    public $timestamps = false;
    protected $fillable = ['CHAB', 'CUT', 'CPC']; // Remplir avec les attributs de la table HABUTPC
    protected $hidden = [];
}
