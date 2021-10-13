<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UniversityRessource;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class UniversityController extends Controller
{
    public function index()
    {
        $Universitys = University::all();
        return $this->sendResponse(UniversityRessource::collection($Universitys), 'University fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'titre' => 'required',
            'agence'=>'required',
            'ville'=>'required',
            'adresse'=>'required',

            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $University = University::create([
            'titre'=>$request->titre,

            'description'=>$request->description,
            'vignette'=>"logo.png",
            'adresse'=>$request->adresse,
            'ecole_id'=>$request->agence,
            'ville_id'=>$request->ville,
            'pays_id'=>$request->pays
        ]);
        return $this->sendResponse(new UniversityRessource($University), 'University created.');
    }


    public function show($id)
    {
        $University = University::find($id);
        if (is_null($University)) {
            return $this->sendError('University does not exist.');
        }
        return $this->sendResponse(new UniversityRessource($University), 'University fetched.');
    }


    public function update(Request $request, University $university)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'titre' => 'required',
            'agence'=>'required',
            'ville'=>'required',
            'adresse'=>'required',
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $university->titre = $input['titre'];
        $university->description = $input['description'];
        $university->vignette = $input['vignette'];
        $university->adresse = $input['adresse'];
        $university->ecole_id = $input['ecole'];
        $university->ville_id = $input['ville'];
        $university->pays_id = $input['pays'];
        //  $blog->description = $input['description'];
        $university->save();

        return $this->sendResponse(new UniversityRessource($university), 'University updated.');
    }

    public function destroy(University $University)
    {
        $University->delete();
        return $this->sendResponse([], 'University deleted.');
    }
}
