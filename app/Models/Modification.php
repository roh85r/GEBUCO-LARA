<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modification extends Model
{
    protected $table = 'MODIFICATION';
    protected $primaryKey = 'CMOD';
    public $timestamps = false;
    protected $fillable = ['CMOD', 'CEXE', 'CCHAP', 'MMOD']; // Remplir avec les attributs de la table MODIFICATION
    protected $hidden = [];

    // Relation avec la table CHAPITRE (clé étrangère CCHAP)
    public function chapitre()
    {
        return $this->belongsTo(Chapitre::class, 'CCHAP', 'CCHAP');
    }
}
