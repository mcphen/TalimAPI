<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function dashboard(){
        return view('agence.dashboard')->with([
            'title'=>"Tableau de bord"
        ]);
    }


    public function universities(){
        return view('agence.universities')->with([
            'title'=>"Université"
        ]);
    }


    public function formations(){
        return view('agence.formations')->with([
            'title'=>"formations"
        ]);
    }


    public function candidats(){
        return view('agence.candidats')->with([
            'title'=>"candidats"
        ]);
    }
}
