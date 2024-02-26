<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
    protected $table = 'NATURE';
    protected $primaryKey = 'CNAT';
    public $timestamps = false;
    protected $fillable = ['CNAT', 'LIBNAT']; // Ajoutez les autres attributs de la table NATURE ici
    protected $hidden = [];
}
