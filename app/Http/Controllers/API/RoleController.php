<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoleRessource;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RoleController extends BaseController
{
    public function index()
    {
        $roles = Role::all();
        return $this->sendResponse(RoleRessource::collection($roles), 'Role fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'role' => 'required',
          //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $role = Role::create($input);
        return $this->sendResponse(new RoleRessource($role), 'Role created.');
    }


    public function show($id)
    {
        $role = Role::find($id);
        if (is_null($role)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new RoleRessource($role), 'Role fetched.');
    }


    public function update(Request $request, Role $role)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'role' => 'required',
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $role->role = $input['role'];
      //  $blog->description = $input['description'];
        $role->save();

        return $this->sendResponse(new RoleRessource($role), 'Role updated.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return $this->sendResponse([], 'Role deleted.');
    }
}
