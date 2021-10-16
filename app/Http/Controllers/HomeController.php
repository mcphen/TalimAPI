<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('auth.login')->with([
            'title'=>"Connexion"
        ]);
    }

    public function home(){
        return view('front.home')->with([
            'title'=>"Connexion"
        ]);
    }

    public function agences(){
        return view('front.agences')->with([
            'title'=>"Connexion"
        ]);
    }

    public function news(){
        return view('front.news')->with([
            'title'=>"Connexion"
        ]);
    }

    public function formations(){
        return view('front.formations')->with([
            'title'=>"Connexion"
        ]);
    }

    public function contacts(){
        return view('front.contacts')->with([
            'title'=>"Connexion"
        ]);
    }

}
