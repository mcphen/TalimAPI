<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FormationRessource;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class FormationController extends Controller
{
    public function index()
    {
        $Formations = Formation::all();
        return $this->sendResponse(FormationRessource::collection($Formations), 'Formation fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'titre' => 'required',
            'agence'=>'required',
            'price'=>'required',
            'university'=>'required',

            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $Formation = Formation::create([
            'titre'=>$request->titre,

            'description'=>$request->description,
            'vignette'=>"logo.png",
            'price'=>$request->price,
            'ecole_id'=>$request->agence,
            'university_id'=>$request->university,
            'actived_at'=>$request->actived
        ]);
        return $this->sendResponse(new FormationRessource($Formation), 'Formation created.');
    }


    public function show($id)
    {
        $Formation = Formation::find($id);
        if (is_null($Formation)) {
            return $this->sendError('Formation does not exist.');
        }
        return $this->sendResponse(new FormationRessource($Formation), 'Formation fetched.');
    }


    public function update(Request $request, Formation $Formation)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'titre' => 'required',
            'agence'=>'required',
            'price'=>'required',
            'university'=>'required',
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $Formation->titre = $input['titre'];
        $Formation->description = $input['description'];
        $Formation->vignette = $input['vignette'];
        $Formation->price = $input['price'];
        $Formation->ecole_id = $input['ecole'];
        $Formation->university_id = $input['university'];
        $Formation->actived_at = $input['actived'];
        //  $blog->description = $input['description'];
        $Formation->save();

        return $this->sendResponse(new FormationRessource($Formation), 'Formation updated.');
    }

    public function destroy(Formation $Formation)
    {
        $Formation->delete();
        return $this->sendResponse([], 'Formation deleted.');
    }
}
