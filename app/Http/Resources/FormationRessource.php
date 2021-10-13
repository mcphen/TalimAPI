<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormationRessource extends JsonResource
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
            'titre'=>$this->titre,
            'slug'=>$this->slug,
            'description'=>$this->description,
            'vignette'=>$this->vignette,
            'price'=>$this->price,
            'agence'=>$this->agence,
            'university'=>$this->university,
            'actived_at'=>$this->actived_at,


            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }
}
