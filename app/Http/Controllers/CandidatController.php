<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function dashboard(){
        return view('candidat.dashboard')->with([
            'title'=>"Tableau de bord"
        ]);
    }
}
