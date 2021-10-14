<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class University extends Model
{
    use HasFactory;use HasSlug;
    protected $fillable = ['titre','slug','description','vignette','adresse','ecole_id','ville_id','pays_id'];

    public function agence(){
        return $this->belongsTo(Ecole::class);
    }

    public function ville(){
        return $this->belongsTo(Ville::class);
    }

    public function pays(){
        return $this->belongsTo(Pays::class);
    }


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs();
    }

    public function getVignetteAttribute($photo){
        return asset('/agences/university/vignettes/'.$photo);
    }


}
