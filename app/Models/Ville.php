<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Ville extends Model
{
    use HasFactory;use HasSlug;
    protected $fillable = ['ville','pays_id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('ville')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs();
    }

    public function pays(){
        return $this->belongsTo(Pays::class);
    }


}
