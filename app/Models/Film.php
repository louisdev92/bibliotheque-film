<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    // Autorise le remplissage en masse de ces champs
    protected $fillable = [
        'titre',
        'annee',
        'note',
        'commentaire',
    ];
}

