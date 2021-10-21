<?php

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

Route::get('/songtexts/bohemianRhapsody', function () {
    return view('/songtexts/bohemianRhapsody');
});

Route::get('/songtexts/plugInBaby', function () {
    return view('/songtexts/plugInBaby');
});

Route::get('/generalItems/books', function () {
    return view('/generalItems/books');
});

Route::get('/generalItems/dalton', function () {
    return view('/generalItems/dalton');
});

Route::get('/generalItems/dalton', function () {
    return view('/generalItems/dalton');
});

Route::get('/songtexts/weAreTheChampions', function () {
    return view('/songtexts/weAreTheChampions');
});

Route::get('/songtexts/uprisingMyBaby', function () {
    return view('/songtexts/uprisingMyBaby');
});

Route::get('/songtexts/killerQueen', function () {
    return view('/songtexts/killerQueen');
});

Route::get('/songtexts/ironMaiden', function () {
    return view('/songtexts/ironMaiden');
});

Route::get('/generalItems/chainsaw', function () {
    return view('/generalItems/chainsaw');
});

Route::get('/generalItems/jamesBond', function () {
    return view('/generalItems/jamesBond');
});

Route::get('/generalItems/darthVader', function () {
    return view('/generalItems/darthVader');
});

Route::get('/generalItems/hamers', function () {
    return view('/generalItems/hamers');
});

Route::get('/generalItems/lukeSkywalker', function () {
    return view('/generalItems/lukeSkywalker');
});

Route::get('/generalItems/streaming', function () {
    return view('/generalItems/streaming');
});

Route::get('/songtexts/uprising', function () {
    return view('/songtexts/uprising');
});

Route::get('/generalItems/circularSaw', function () {
    return view('/generalItems/circularSaw');
});