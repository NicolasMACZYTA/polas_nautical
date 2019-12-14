<?php

namespace bateaux_v3;

use Illuminate\Database\Eloquent\Model;

class entretien extends Model
{
    protected $table = 'reservations';

    protected $fillable = [
        'piece',
        'date_entretien',
        'date_prochain',
        'id_bateau',
    ];
}
