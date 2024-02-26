<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imputation extends Model
{
    protected $table = 'IMPUTATION';
    protected $primaryKey = 'CEXE';
    public $timestamps = false;
    protected $fillable = ['CEXE', 'CCHAP', 'DOTINT', 'LFR', 'MTREGL', 'MTREST']; // Remplir avec les attributs de la table IMPUTATION
    protected $hidden = [];
}
