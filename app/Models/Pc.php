<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    protected $table = 'PC';
    protected $primaryKey = 'CPC';
    public $timestamps = false;
    protected $fillable = ['CPC', 'LIBPC', 'CHABI']; // Remplir avec les attributs de la table PC
    protected $hidden = [];

    // Relation avec la table HABILITATION (clé étrangère CHABI)
    public function habilitation()
    {
        return $this->belongsTo(Habilitation::class, 'CHABI', 'CHABI');
    }
}
