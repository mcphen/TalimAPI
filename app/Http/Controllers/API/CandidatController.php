<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidatRessource;
use App\Models\Candidat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CandidatController extends BaseController
{
    public function index()
    {
        $roles = Candidat::all();
        return $this->sendResponse(CandidatRessource::collection($roles), 'Agence fetched.');
    }

    public function candidature(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [

            'name' => 'required',
            'firstname' => 'required',
            'email' => ['required','email', 'unique:users'],
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
            'firstname'=>$request->firstname,
            'role_id'=>3,
            'actived_at'=>1,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        $candidat = Candidat::create([
            'slug'=>Str::slug($request->name.' '.$request->firstname),
            'fonction'=>"",
            'adresse'=>$request->adresse,
            'biographie'=>"",
            'user_id'=>$user->id,
            'tel'=>$request->tel,
            'nationalite'=>$request->nationalite,
            'pays_residence'=>$request->pays_residence,
            'nom_pere'=>"",
            'nom_mere'=>"",
            'firstname_pere'=>"",
            'firstname_mere'=>"",
            'sexe'=>$request->sexe,
            'niveau_scolaire'=>"",
            'etablissement'=>""
        ]);
        if(isset($request->services)){
            foreach ($request->services as $cat){
                $candidat->services()->attach($cat['id']);
            }
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $authUser = Auth::user();
            $success['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken;
            $success['user'] =  $authUser;
            $success['role_id'] =  $authUser->role_id;

            return $this->sendResponse($success, 'User signed in');
        }
        else{
            return $this->sendError('Incorrect.', ['error'=>'Incorrect']);
        }



    }
}
