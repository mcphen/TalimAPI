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

    public function register(){
        return view('auth.register')->with([
            'title'=>"Inscription"
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

    public function formations_detail($slug){
        return view('front.formation_detail')->with([
            'title'=>"Connexion"
        ]);
    }
    public function news_detail($slug){
        return view('front.news_detail')->with([
            'title'=>"Connexion"
        ]);
    }

    public function contacts(){
        return view('front.contacts')->with([
            'title'=>"Connexion"
        ]);
    }

    public function bibliotheque(){
        return view('front.bibliotheque')->with([
            'title'=>"Connexion"
        ]);
    }
    public function talimeur(){
        return view('front.talimeur')->with([
            'title'=>"Connexion"
        ]);
    }

}
