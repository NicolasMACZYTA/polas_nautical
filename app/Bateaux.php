<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bateaux extends Model
{
    protected $table = 'bateaux';

    protected $fillable = [
        'nom',
        'modele',
        'longueur',
        'largeur',
        'id_proprietaire'
    ];
}
