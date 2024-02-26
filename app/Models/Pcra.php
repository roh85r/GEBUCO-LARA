<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pcra extends Model
{
    protected $table = 'PCRA';
    protected $primaryKey = 'CPC';
    public $timestamps = false;
    protected $fillable = ['CPC']; // Remplir avec les attributs de la table PCRA
    protected $hidden = [];

    // Relation avec la table PC (clé étrangère CPC)
    public function pc()
    {
        return $this->belongsTo(PC::class, 'CPC', 'CPC');
    }
}
