<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FiliereRessource;
use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class FiliereController extends BaseController
{
    public function index()
    {
        $filieres = Filiere::all();
        return $this->sendResponse(FiliereRessource::collection($filieres), 'Filiere fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'filiere' => 'required',
            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $Filiere = Filiere::create($input);
        return $this->sendResponse(new FiliereRessource($Filiere), 'Filiere created.');
    }


    public function show($id)
    {
        $Filiere = Filiere::find($id);
        if (is_null($Filiere)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new FiliereRessource($Filiere), 'Filiere fetched.');
    }


    public function update(Request $request, Filiere $Filiere)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'filiere' => 'required',
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $Filiere->filiere = $input['filiere'];
        //  $blog->description = $input['description'];
        $Filiere->save();

        return $this->sendResponse(new FiliereRessource($Filiere), 'Filiere updated.');
    }

    public function destroy(Filiere $Filiere)
    {
        $Filiere->delete();
        return $this->sendResponse([], 'Filiere deleted.');
    }
}
