<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Cycle extends Model
{
    use HasFactory;use HasSlug;
    protected $fillable = ['cycle'];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('cycle')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs();
    }


}
