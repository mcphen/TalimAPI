<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaysRessource;
use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class PaysController extends BaseController
{
    public function index()
    {
        $pays = Pays::all();
        return $this->sendResponse(PaysRessource::collection($pays), 'Pays fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'libelle_pays' => 'required',
            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $Pays = Pays::create($input);
        return $this->sendResponse(new PaysRessource($Pays), 'Pays created.');
    }


    public function show($id)
    {
        $Pays = Pays::find($id);
        if (is_null($Pays)) {
            return $this->sendError('Pays does not exist.');
        }
        return $this->sendResponse(new PaysRessource($Pays), 'Pays fetched.');
    }


    public function update(Request $request,  $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'libelle_pays' => 'required',
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $pays = Pays::find($id);
        $pays->libelle_pays = $input['libelle_pays'];
        //  $blog->description = $input['description'];
        $pays->save();

        return $this->sendResponse(new PaysRessource($pays), 'Pays updated.');
    }

    public function destroy($id)
    {
        $pays = Pays::find($id);
        //dd($pays);

        $pays->delete();
        return $this->sendResponse([], 'Pays deleted.');
    }
}
