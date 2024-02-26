<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    protected $table = 'CHAPITRE';
    protected $primaryKey = 'CCHAP';
    public $timestamps = false;
    protected $fillable = ['CCHAP', 'LIBCHA', 'CSECT']; // Remplir avec les attributs de la table CHAPITRE
    protected $hidden = [];

    // Relation avec la table SECTION (clé étrangère CSECT)
    public function section()
    {
        return $this->belongsTo(Section::class, 'CSECT', 'CSECT');
    }
}
