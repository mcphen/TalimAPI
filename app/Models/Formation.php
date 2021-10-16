<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Formation extends Model
{
    use HasFactory;use HasSlug;
    protected $fillable = ['titre','slug','description','vignette','price','university_id','actived_at','ecole_id','filiere_id','cycle_id','file_pdf'];

    public function agence(){
        return $this->belongsTo(Ecole::class);
    }

    public function university(){
        return $this->belongsTo(University::class);
    }

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }

    public function cycle(){
        return $this->belongsTo(Cycle::class);
    }




    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs();
    }


}
