<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    
    protected $table = 'reservations';

    protected $fillable = [
        'state',
        'date_debut',
        'date_fin',
        'id_bateaux',
        'id_emplacement'
    ];
}
