<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateur';

    protected $fillable = [
        'login',
        'mot_de_passe',
        'nom',
        'prenom',
        'id_droit'
    ];

}
