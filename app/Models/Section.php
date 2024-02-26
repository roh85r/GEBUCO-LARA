<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'SECTION';
    protected $primaryKey = 'CSECT';
    public $timestamps = false;
    protected $fillable = ['CSECT', 'LIBSECT', 'CCHAP']; // Remplir avec les attributs de la table SECTION
    protected $hidden = [];

    // Relation avec la table CHAPITRE (clé étrangère CCHAP)
    public function chapitre()
    {
        return $this->belongsTo(Chapitre::class, 'CCHAP', 'CCHAP');
    }
}
