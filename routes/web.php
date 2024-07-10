<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiaranPersController;
use App\Http\Controllers\KontenLokalController;
use App\Http\Controllers\SponsorshipController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [DashboardController::class,'index']);
Route::get('/siaranpers', [SiaranPersController::class,'index']);
Route::get('/kontenlokal', [KontenLokalController::class,'index']);
Route::get('/sponsorship', [SponsorshipController::class,'index']);

