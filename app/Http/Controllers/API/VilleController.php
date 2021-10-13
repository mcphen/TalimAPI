<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\VilleRessource;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class VilleController extends BaseController
{
    public function index()
    {
        $Villes = Ville::all();
        return $this->sendResponse(VilleRessource::collection($Villes), 'Ville fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'ville' => 'required',
            'pays_id'=>'required'
            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $Ville = Ville::create($input);
        return $this->sendResponse(new VilleRessource($Ville), 'Ville created.');
    }


    public function show($id)
    {
        $Ville = Ville::find($id);
        if (is_null($Ville)) {
            return $this->sendError('Ville does not exist.');
        }
        return $this->sendResponse(new VilleRessource($Ville), 'Ville fetched.');
    }


    public function update(Request $request, Ville $Ville)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'ville' => 'required',
            'pays_id'=>'required'
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $Ville->ville = $input['ville'];
        $Ville->pays_id = $input['pays_id'];
        //  $blog->description = $input['description'];
        $Ville->save();

        return $this->sendResponse(new VilleRessource($Ville), 'Ville updated.');
    }

    public function destroy(Ville $Ville)
    {
        $Ville->delete();
        return $this->sendResponse([], 'Ville deleted.');
    }
}
