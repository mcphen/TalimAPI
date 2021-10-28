<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Candidat extends Model
{
    use HasFactory;
    protected $with = ['cursus'];
    protected $fillable = [
        'slug','fonction','adresse','biographie',
        'user_id','tel','nationalite','pays_residence',
        'nom_pere','nom_mere','firstname_pere','firstname_mere',
        'sexe','niveau_scolaire','etablissement','photo_identite',
        'passport','acte_naissance','cv'
    ];

    public function services(){
        return $this->belongsToMany(Service::class,'candidat_service','candidat_id','service_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cursus(){
        return $this->HasMany(Cursus::class);
    }



}
