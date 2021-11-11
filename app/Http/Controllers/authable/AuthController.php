<?php

namespace App\Http\Controllers\authable;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index(){
        return view('admin.dashboard');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function books(){
        $books = Book::all();
        return view('admin.books')->with(compact('books'));
    }

    public function users(){
        $users = User::all();
        return view('admin.users')->with(compact('users'));
    }

    public function user(User $user){
        return view('admin.edit.user')->with(compact('user'));
    }

    public function book(Book $book){
        return view('admin.edit.book')->with(compact('book'));
    }

    public function editUser(Request $request){
        $user = User::findOrFail($request->id);

        $name = $request->name;
        $email = $request->email;
        $rol = $request->rol;

        $user->name = $name;
        $user->email = $email;
        $user->rol = $rol;
        $user->save();

        return redirect()->route('admin.users');
    }

    public function editBook(Request $request){
        $book = Book::findOrFail($request->id);

        $name = $request->name;
        $auteur = $request->auteur;
        $price = $request->price;
        if(!empty($request->desc)){
            $desc = $request->desc;
        } else {
            $desc = "";
        }

        $book->name = $name;
        $book->auteur = $auteur;
        $book->price = $price;
        if($desc != null){
            $book->desc = $desc;
        }

        $book->save();

        return redirect()->route('admin.books');
    }

}
