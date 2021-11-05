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
        return view('admin.edit.books')->with(compact('book'));
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

}
