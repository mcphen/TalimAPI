<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UniversityRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'titre'=>$this->titre,
            'slug'=>$this->slug,
            'description'=>$this->description,
            'vignette'=>$this->vignette,
            'adresse'=>$this->adresse,
            'agence'=>$this->agence,
            'ville'=>$this->ville,
            'pays_id'=>$this->pays_id,
            'ville_id'=>$this->ville_id,
            'pays'=>$this->pays,


            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }
}
