<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FormationRessource;
use App\Models\Ecole;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FormationController extends BaseController
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
          //  'agence'=>'required',
            'price'=>'required',
            'university'=>'required',

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
            $path1 = "agences/formation/vignettes/".$filename1;
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


            $path = "agences/formation/documents_pdf/".$filename;


            file_put_contents($path, $decode);
        }

        $ecole = Ecole::where('user_id',auth()->user()->id)->first();
        $Formation = Formation::create([
            'titre'=>$request->titre,

            'description'=>$request->description,
            'vignette'=>$filename1,
            'price'=>$request->price,
            'ecole_id'=>$ecole->id,
            'filiere_id'=>$request->filiere,
            'cycle_id'=>$request->cycle,
            'file_pdf'=>$filename,
            'university_id'=>$request->university,
            'actived_at'=>1
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
