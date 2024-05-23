<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontcontroller;
use App\Http\Controllers\admincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [frontcontroller::class,"index"]);


//Route::match(["GET","POST"],'/add',[frontcontroller::class,"add"])->name("add");
//
//Route::match(["GET","POST"],'/reduce',[frontcontroller::class,"reduce"])->name("reduce");
//
//Route::match(["GET","POST"],'/multiply',[frontcontroller::class,"multiply"])->name("multiply");
//
//Route::match(["GET","POST"],'/Divided',[frontcontroller::class,"Divided"])->name("Divided");

Route::get('/movie/{id?}',  [frontcontroller::class,"movie"])->name("movie");
Route::post('/movieadd',  [frontcontroller::class,"add"])->name("movieadd");
Route::get('/movieremove{id}',  [frontcontroller::class,"remove"])->name("movieremove");
Route::post('/comment',  [frontcontroller::class,"comment"])->name("comment");


Route::name("admin.")->
    prefix("admin")->
    controller(admincontroller::class)->
    group(function () {
        Route::get('/', "index")->name("index");

        Route::get('/dashborad', "dashborad")->name("dashborad");

        Route::get('/dailyChart', "dailyChart")->name("dailyChart"); 
        
    });
