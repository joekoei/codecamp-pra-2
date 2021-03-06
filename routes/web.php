<?php

use App\Http\Controllers\authable\AuthController;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\SongtextController;
use App\Http\Controllers\ToolController;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard',[AuthController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/profile',[AuthController::class,'profile'])->middleware(['auth'])->name('profile');

Route::get('/dashboard/books', [AuthController::class,'books'])->middleware(['auth'])->name('admin.books');
Route::get('/dashboard/books/create',[AuthController::class,'createBook'])->middleware(['auth'])->name('admin.books.create');

Route::get('/dashboard/users',[AuthController::class,'users'])->middleware(['auth'])->name('admin.users');

Route::get('/dashboard/users/{user}',[AuthController::class,'user'])->middleware(['auth'])->name('admin.users.edit');

Route::get('/dashboard/books/{book}',[AuthController::class,'book'])->middleware(['auth'])->name('admin.books.edit');

Route::post('/dashboard/users',[AuthController::class,'editUser'])->middleware(['auth'])->name('admin.user.edit');

Route::post('/dashboard/books',[AuthController::class,'editBook'])->middleware(['auth'])->name('admin.book.edit');

Route::post('/dashboard/book/create', [AuthController::class,'storebook'])->middleware(['auth'])->name('admin.books.create.method');
Route::post('/dashboard/book/delete',[AuthController::class,'destroy'])->middleware(['auth'])->name('admin.book.destroy');

Route::get('/songtexts/bohemianRhapsody',[SongtextController::class,'bhr'])->name('song.br');

Route::get('/songtexts/plugInBaby',[SongtextController::class,'pib'])->name('song.pib');

Route::get('/songtexts/weAreTheChampions',[SongtextController::class,'watc'])->name('song.watc');

Route::get('/songtexts/uprisingMyBaby',[SongtextController::class,'umb'])->name('song.umb');

Route::get('/songtexts/killerQueen', [SongtextController::class,'kq'])->name('song.kq');

Route::get('/songtexts/ironMaiden',[SongtextController::class,'im'])->name('song.im');

Route::get('/songtexts/uprising', [SongtextController::class,'u'])->name('song.u');

Route::get('/songtexts/madnessMuse', [SongtextController::class,'mm'])->name('song.mm');


Route::get('/generalItems/books', [ToolController::class,'book'])->name('items.book');

Route::get('/generalItems/dalton', [ToolController::class,'dalton'])->name('items.dalton');

Route::get('/generalItems/chainsaw', [ToolController::class,'chainsaw'])->name('items.chain');

Route::get('/generalItems/jamesBond',[ToolController::class,'jamesbond'])->name('items.james');

Route::get('/generalItems/darthVader',[ToolController::class,'darthVader'])->name('items.dv');

Route::get('/generalItems/hamers',[ToolController::class,'hamers'])->name('items.hamers');

Route::get('/generalItems/lukeSkywalker',[ToolController::class,'luke'])->name('items.luke');

Route::get('/generalItems/streaming', [ToolController::class,'streaming'])->name('itemms.streaming');

Route::get('/generalItems/circularSaw', [ToolController::class,'circularSaw'])->name('items.circular');

Route::get('/generalItems/saws', [ToolController::class,'saws'])->name('items.saws');

Route::get('/generalItems/screwDriver', [ToolController::class,'screwDriver'])->name('items.screwDriver');

Route::get('/generalItems/handSaw', [ToolController::class,'handSaw'])->name('items.handSaw');

Route::get('/generalItems/georgeClooney',[ToolController::class,'georgeClooney'])->name('items.george');


Route::get('/drinks/warmeDranken', [DrinksController::class,'wd'])->name('drinks.wd');

Route::get('/drinks/frisdranken', [DrinksController::class,'f'])->name('drinks.f');


Route::get('/personenAndPersonages/personen',[ToolController::class,'personen'])->name('personenAndPersonages.personen');

Route::get('/personenAndPersonages/personages',[ToolController::class,'personages'])->name('personenAndPersonages.personages');


require __DIR__.'/auth.php';
