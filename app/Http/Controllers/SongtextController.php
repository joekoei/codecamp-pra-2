<?php

namespace App\Http\Controllers;

class SongtextController extends Controller
{

    public function bhr(){
        return view('songtexts.bohemianRhapsody');
    }

    public function im(){
        return view('songtexts.ironMaiden');
    }


    public function kq(){
        return view('songtexts.killerQueen');
    }

    public function pib(){
        return view('songtexts.PlugInBaby');
    }

    public function u(){
        return view('songtexts.uprising');
    }

    public function umb(){
        return view('songtexts.uprisingMyBaby');
    }

    public function watc(){
        return view('songtexts.weAreTheChampions');
    }
}
