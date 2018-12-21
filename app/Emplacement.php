<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emplacement extends Model
{
    protected $fillable = [
        'largeur_max',
        'longueur_max'
    ];
}
