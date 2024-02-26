<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    protected $table = 'EXERCICE';
    protected $primaryKey = 'CEXE';
    public $timestamps = false;
    protected $fillable = ['CEXE', 'LIBEXE', 'CNAT']; // Remplir avec les attributs de la table EXERCICE
    protected $hidden = [];

    // Relation avec la table NATEXE (clé étrangère CNAT)
    public function natexe()
    {
        return $this->belongsTo(Natexe::class, 'CNAT', 'CNAT');
    }
}
