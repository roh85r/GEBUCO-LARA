<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habilitation extends Model
{
    protected $table = 'HABILITATION';
    protected $primaryKey = 'CHABI';
    public $timestamps = false;
    protected $fillable = ['CHABI', 'LIBHABI']; // Remplir avec les attributs de la table HABILITATION
    protected $hidden = [];
}
