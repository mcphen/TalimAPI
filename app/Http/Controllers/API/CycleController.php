<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CycleRessource;
use App\Models\Cycle;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class CycleController extends BaseController
{
    public function index()
    {
        $Cycles = Cycle::all();
        return $this->sendResponse(CycleRessource::collection($Cycles), 'Cycle fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'cycle' => 'required',
            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $Cycle = Cycle::create($input);
        return $this->sendResponse(new CycleRessource($Cycle), 'Cycle created.');
    }


    public function show($id)
    {
        $Cycle = Cycle::find($id);
        if (is_null($Cycle)) {
            return $this->sendError('Cycles does not exist.');
        }
        return $this->sendResponse(new CycleRessource($Cycle), 'Cycle fetched.');
    }


    public function update(Request $request, Cycle $Cycle)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'cycle' => 'required',
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $Cycle->cycle = $input['cycle'];
        //  $blog->description = $input['description'];
        $Cycle->save();

        return $this->sendResponse(new CycleRessource($Cycle), 'cycle updated.');
    }

    public function destroy(Cycle $Cycle)
    {
        $Cycle->delete();
        return $this->sendResponse([], 'cycle deleted.');
    }
}
