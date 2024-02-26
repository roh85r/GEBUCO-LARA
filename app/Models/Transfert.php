<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    protected $table = 'TRANSFERT';
    protected $primaryKey = 'CTRANS';
    public $timestamps = false;
    protected $fillable = ['CTRANS', 'CEXE', 'CCHAP', 'MTRANS']; // Remplir avec les attributs de la table TRANSFERT
    protected $hidden = [];

    // Relation avec la table CHAPITRE (clé étrangère CCHAP)
    public function chapitre()
    {
        return $this->belongsTo(Chapitre::class, 'CCHAP', 'CCHAP');
    }
}
