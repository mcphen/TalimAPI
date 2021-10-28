<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CandidatRessource extends JsonResource
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
            'fonction'=>$this->fonction,
            'slug'=>$this->slug,
            'adresse'=>$this->adresse,
            'biographie'=>$this->biographie,
            'nationalite'=>$this->nationalite,
            'tel'=>$this->tel,
            'pays_residence'=>$this->pays_residence,
            'nom_pere'=>$this->nom_pere,
            'nom_mere'=>$this->nom_mere,
            'firstname_pere'=>$this->firstname_pere,
            'firstname_mere'=>$this->firstname_mere,
            'sexe'=>$this->sexe,
            'niveau_scolaire'=>$this->niveau_scolaire,
            'etablissement'=>$this->etablissement,
            'services'=>$this->services,
            'cursus'=>$this->cursus,
            'user'=> $this->user,
            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }
}
