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

Route::get('/songtexts/PlugInBaby', function () {
    return view('/songtexts/PlugInBaby');
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

Route::get('/songtexts//weAreTheChampions', function () {
    return view('/songtexts/weAreTheChampions');
});

Route::get('/songtexts/uprisingMyBaby', function () {
    return view('/songtexts/uprisingMyBaby');
});