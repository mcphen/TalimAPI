<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AgenceRessource;
use App\Models\Ecole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class AgenceController extends BaseController
{
    public function index()
    {
        $roles = Ecole::all();
        return $this->sendResponse(AgenceRessource::collection($roles), 'Agence fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name_agence' => 'required',
            'name' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
         //   'role_id'=> 'required',
            //'actived_at'=> 'required',
            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $user = User::create([
            'name'=>$request->name,
            'firstname'=>$request->name,
            'role_id'=>2,
            'actived_at'=>1,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        $ecole = Ecole::create([
            'name'=>$request->name_agence,
            'adresse'=>"paris 16eme",
            'ville'=>"paris",
            'pays'=>"France",
            'tel'=>"79393939",
            'user_id'=>$user->id
        ]);
        return $this->sendResponse(new AgenceRessource($ecole), 'Agence created.');
    }


    public function show($id)
    {
        $role = Ecole::find($id);
        if (is_null($role)) {
            return $this->sendError('Agence does not exist.');
        }
        return $this->sendResponse(new AgenceRessource($role), 'Agence fetched.');
    }


    public function update(Request $request, Ecole $role)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name_agence' => 'required',
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $role->name_agence = $input['name_agence'];
        //  $blog->description = $input['description'];
        $role->save();

        return $this->sendResponse(new AgenceRessource($role), 'Agence updated.');
    }

    public function destroy(Ecole $role)
    {
        $role->delete();
        return $this->sendResponse([], 'Role deleted.');
    }
}
