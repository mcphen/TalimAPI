<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard')->with([
            'title'=>"Tableau de bord"
        ]);
    }

    public function agences(){
        return view('admin.agence.agences')->with([
            'title'=>"Gestions Agences"
        ]);
    }

    public function filieres(){
        return view('admin.parametre.filiere')->with([
            'title'=>"Gestions filieres"
        ]);
    }

    public function cycles(){
        return view('admin.parametre.cycles')->with([
            'title'=>"Gestions cycles"
        ]);
    }

    public function pays(){
        return view('admin.parametre.pays')->with([
            'title'=>"Gestions pays"
        ]);
    }

    public function villes(){
        return view('admin.parametre.villes')->with([
            'title'=>"Gestions villes"
        ]);
    }

    public function roles(){
        return view('admin.parametre.roles')->with([
            'title'=>"Gestions roles"
        ]);
    }

    public function niveaux(){
        return view('admin.parametre.niveaux')->with([
            'title'=>"Gestions niveaux"
        ]);
    }
}
