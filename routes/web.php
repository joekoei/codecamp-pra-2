<?php

use App\Http\Controllers\SongtextController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\DrinksController;
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


Route::get('/drinks/warmeDranken', [DrinksController::class,'wd'])->name('drinks.wd');

Route::get('/drinks/frisdranken', [DrinksController::class,'f'])->name('drinks.f');
