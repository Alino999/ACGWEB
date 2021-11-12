<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoumettreAnnonce extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre',
        'vente_location',
        'monaie',
        'prefix_prix',
        'postfix_prix',
        'taille_zone',
        'taille_postfix',
        'chambre',
        'garage',
        'propriete',
        'statut',
    ];
}
