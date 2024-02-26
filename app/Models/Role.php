<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "ROLE_UTILISATEUR";

    protected $primaryKey = "ID_ROLE";

    protected $fillable = [
        "ID_ROLE",
        "LIBELLE"
    ];
}

