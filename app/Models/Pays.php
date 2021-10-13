<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Pays extends Model
{
    use HasFactory;use HasSlug;
    protected $fillable =['libelle_pays'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('pays')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs();
    }


}
