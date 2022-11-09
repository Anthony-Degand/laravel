<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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

// Route::get('/', function () { // sans controleur (mauvaise pratiques)
//     return view('articles');
// });

// Route::get('/', 'App\Http\Controllers\postController@index'); // en passant par un controller

 Route::get('/',[postController::class,'index']); // simplifier grace a l'extention vscode "php namespace resolver", appeler un array postcontroller::class puis clique droit importer class se qui va l'ajouter en haut de page. ( use ... ), suivis du nom de la fonction utiliser dans postcontroller