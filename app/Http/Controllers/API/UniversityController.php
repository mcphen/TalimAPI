<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UniversityRessource;
use App\Models\Ecole;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UniversityController extends BaseController
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
           // 'agence'=>'required',
            'ville'=>'required',
            'adresse'=>'required',

            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $img = $request->get('photo');
        $pdf = $request->get('fichier_pdf');

        //var_dump($pdf); die();
        if($img!=""){
            $exploded1 =  explode(',', $img);
            if( Str::contains($exploded1[0], 'jpg')){
                $ext1 = 'jpg';

            }elseif (Str::contains($exploded1[0], 'jpeg')){
                $ext1 = 'jpeg';
            }elseif (Str::contains($exploded1[0], 'png')){
                $ext1 = 'png';
            }
            $decode1 = base64_decode($exploded1[1]);
            $filename1 = Str::random().'.'.$ext1;
            $path1 = "agences/university/vignettes/".$filename1;
            file_put_contents($path1, $decode1);
        }

        if($pdf!=""){
            $exploded = explode(',', $pdf);


            // var_dump($exploded); die();



            if( Str::contains($exploded[0], 'pdf')){
                $ext = 'pdf';
            }

            $decode = base64_decode($exploded[1]);


            $filename = Str::random().'.'.$ext;


            $path = "agences/university/documents_pdf/".$filename;


            file_put_contents($path, $decode);
        }

        $ecole = Ecole::where('user_id',auth()->user()->id)->first();


        $University = University::create([
            'titre'=>$request->titre,

            'description'=>$request->description,
            'vignette'=>$filename1 ,
            'adresse'=>$request->adresse,
            'ecole_id'=>$ecole->id,
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
