<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Session;

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
    return view("choose");
});

Route::post("/choose", [InscriptionController::class, "choose"]);
Route::get("inscription", [InscriptionController::class, "inscription"]);
 
Route::post("/inscriptionInfo", [InscriptionController::class, "inscriptionInfo"]);
Route::post("/inscriptionCv", [InscriptionController::class, "inscriptionCv"])->name("inscrire");
