<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursus extends Model
{
    use HasFactory;
    protected $fillable = [
        'annee_academique','pays','ville','etablissement','serie','niveau','candidat_id',
        'domaine','diplome','moyenne','mention','commentaire','type_cursus',
        ];
}
