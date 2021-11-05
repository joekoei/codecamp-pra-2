<?php

namespace App\Http\Controllers;

class ToolController extends Controller
{

    public function book(){
        return view('generalItems.books');
    }

    public function chainsaw(){
        return view('generalItems.chainsaw');
    }

    public function circularSaw(){
        return view('generalItems.circularSaw');
    }

    public function dalton(){
        return view('generalItems.dalton');
    }

    public function darthVader(){
        return view('generalItems.darthVader');
    }

    public function hamers(){
        return view('generalItems.hamers');
    }

    public function jamesbond(){
        return view('generalItems.jamesBond');
    }

    public function luke(){
        return view('generalItems.lukeSkywalker');
    }

    public function screwdriver(){
        return view('generalItems.screwdriver');
    }

    public function handSaw(){
        return view('generalItems.handSaw');
    }

}
