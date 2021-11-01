<?php

namespace App\Http\Controllers;

class DrinksController extends Controller
{

    public function f(){
        return view('drinks.frisdranken');
    }

    public function wd(){
        return view('drinks.warmeDranken');
    }
}
