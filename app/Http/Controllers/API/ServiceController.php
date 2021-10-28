<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceRessource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class ServiceController extends BaseController
{
    public function index()
    {
        $Services = Service::all();
        return $this->sendResponse(ServiceRessource::collection($Services), 'Service fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'service' => 'required',
            'description'=>'required'
            //  'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $Service = Service::create($input);
        return $this->sendResponse(new ServiceRessource($Service), 'Service created.');
    }


    public function show($id)
    {
        $Service = Service::find($id);
        if (is_null($Service)) {
            return $this->sendError('Service does not exist.');
        }
        return $this->sendResponse(new ServiceRessource($Service), 'Service fetched.');
    }


    public function update(Request $request, Service $service)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'service' => 'required',
            'description'=>'required'
            //'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $service->service = $input['service'];
        $service->description = $input['description'];
        //  $blog->description = $input['description'];
        $service->save();

        return $this->sendResponse(new ServiceRessource($service), 'Service updated.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return $this->sendResponse([], 'Service deleted.');
    }
}
