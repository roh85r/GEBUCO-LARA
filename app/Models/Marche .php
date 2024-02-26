<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marche extends Model
{
    protected $table = 'MARCHE';
    protected $primaryKey = 'CMAR';
    public $timestamps = false;
    protected $fillable = ['CMAR', 'LIBMAR', 'CFOUR']; // Remplir avec les attributs de la table MARCHE
    protected $hidden = [];

    // Relation avec la table FOURNISSEUR (clé étrangère CFOUR)
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'CFOUR', 'CFOUR');
    }
}
