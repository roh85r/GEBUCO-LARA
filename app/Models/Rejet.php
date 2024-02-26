<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rejet extends Model
{
    protected $table = 'REJET';
    protected $primaryKey = 'CREJ';
    public $timestamps = false;
    protected $fillable = ['CREJ', 'LIBBREJ', 'CENG']; // Remplir avec les attributs de la table REJET
    protected $hidden = [];

    // Relation avec la table ENFONC (clé étrangère CENG)
    public function enfonc()
    {
        return $this->belongsTo(Enfonc::class, 'CENG', 'CENG');
    }
}
