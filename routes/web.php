<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeowController;

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

//Route::get('/', function () {
//    return  "Homepage";
//});
//
//Route::get('/meows', function () {
//    return "Liste des messages";
//});
//
//Route::get('/meows/{id}', function ($id) {
//    return "Message " . $id ;
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/meows', [MeowController::class, 'index']);
Route::get('/meows/{id}', [MeowController::class, 'show']);
