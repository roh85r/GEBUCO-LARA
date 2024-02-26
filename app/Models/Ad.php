<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AD extends Model
{
    protected $table = 'AD';
    protected $primaryKey = 'CAD';
    public $timestamps = false;
    protected $fillable = ['CAD', 'LIBAD', 'CCHAP', 'CEXE', 'CPC']; // Remplir avec les attributs de la table AD
    protected $hidden = [];

    // Relation avec la table CHAPITRE (clé étrangère CCHAP)
    public function chapitre()
    {
        return $this->belongsTo(Chapitre::class, 'CCHAP', 'CCHAP');
    }

    // Relation avec la table EXERCICE (clé étrangère CEXE)
    public function exercice()
    {
        return $this->belongsTo(Exercice::class, 'CEXE', 'CEXE');
    }

    // Relation avec la table PC (clé étrangère CPC)
    public function pc()
    {
        return $this->belongsTo(PC::class, 'CPC', 'CPC');
    }
}
