<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Cursus;
use Illuminate\Http\Request;

class CursusController extends BaseController
{
    public function store(Request $request){
        $candidat = Candidat::where('user_id',auth()->user()->id)->first();
        Cursus::create([
            'annee_academique'=>$request->annee_academique,
            'pays'=>$request->pays,
            'ville'=>$request->ville,
            'etablissement'=>$request->etablissement,
            'serie'=>$request->serie,
            'niveau'=>$request->niveau,
            'candidat_id'=>$candidat->id,
            'domaine'=>$request->domaine,
            'diplome'=>$request->diplome,
            'moyenne'=>$request->moyenne,
            'mention'=>$request->mention,
            'commentaire'=>$request->commentaire,
            'type_cursus'=>$request->type_cursus,

        ]);
        return 1;
    }
}
