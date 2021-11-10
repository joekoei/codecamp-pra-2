<?php

namespace App\Http\Controllers;

use App\Models\Book;

class ToolController extends Controller
{

    public function book(){
        $books = Book::all();
        return view('generalItems.books')->with(compact('books'));
    }

    public function chainsaw(){
        return view('generalItems.chainsaw');
    }

    public function circularSaw(){
        return view('generalItems.circularSaw');
    }

    public function saws(){
        return view('generalItems.saws');
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

    public function georgeClooney(){
        return view('generalItems.georgeClooney');
    }
}
