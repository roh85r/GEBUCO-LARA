<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'OPERATION';
    protected $primaryKey = 'COPE';
    public $timestamps = false;
    protected $fillable = ['COPE', 'LIBOPE', 'CAD', 'CMAR', 'CFOUR']; // Remplir avec les attributs de la table OPERATION
    protected $hidden = [];

    // Relation avec la table AD (clé étrangère CAD)
    public function ad()
    {
        return $this->belongsTo(AD::class, 'CAD', 'CAD');
    }

    // Relation avec la table MARCHE (clé étrangère CMAR)
    public function marche()
    {
        return $this->belongsTo(Marche::class, 'CMAR', 'CMAR');
    }

    // Relation avec la table FOURNISSEUR (clé étrangère CFOUR)
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'CFOUR', 'CFOUR');
    }
}
