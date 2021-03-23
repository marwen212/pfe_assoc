<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'CIN',
        'date_naiss',
        'tel',
        'adresse',
        'Situation_Fam',
        'nb_enfants'
    ];
}
