<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enfonc extends Model
{
    protected $table = 'ENFONC';
    protected $primaryKey = ['CENG', 'CFON']; // Définir les deux clés primaires
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['CENG', 'CFON', 'DATVISA']; // Remplir avec les attributs de la table ENFONC
    protected $hidden = [];
}
