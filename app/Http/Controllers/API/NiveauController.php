<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NiveauRessource;
use App\Models\Niveau;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class NiveauController extends BaseController
{
    public function index()
    {
        $Niveaus = Niveau::all();
        return $this->sendResponse(NiveauRessource::collection($Niveaus), 'Niveau fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'niveau' => 'required',
            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $Niveau = Niveau::create($input);
        return $this->sendResponse(new NiveauRessource($Niveau), 'Niveau created.');
    }


    public function show($id)
    {
        $Niveau = Niveau::find($id);
        if (is_null($Niveau)) {
            return $this->sendError('niveau does not exist.');
        }
        return $this->sendResponse(new NiveauRessource($Niveau), 'Niveau fetched.');
    }


    public function update(Request $request, Niveau $Niveau)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'niveau' => 'required',
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $Niveau->niveau = $input['niveau'];
        //  $blog->description = $input['description'];
        $Niveau->save();

        return $this->sendResponse(new NiveauRessource($Niveau), 'Niveau updated.');
    }

    public function destroy(Niveau $Niveau)
    {
        $Niveau->delete();
        return $this->sendResponse([], 'Niveau deleted.');
    }
}
