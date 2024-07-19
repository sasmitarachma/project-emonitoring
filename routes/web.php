<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiaranPersController;
use App\Http\Controllers\KontenLokalController;
use App\Http\Controllers\SponsorshipController;
use App\Http\Controllers\LoginController;


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
Route::get('/sponsorship', [SponsorshipController::class,'index'])->name('sponsorship.index');
Route::delete('/sponsorship/{sponsorship}', [SponsorshipController::class, 'destroy'])->name('sponsorship.destroy');
Route::post('/sponsorship', [SponsorshipController::class, 'store'])->name('sponsorship.store');
Route::get('/sponsorship/{sponsorship}/edit', [SponsorshipController::class, 'edit'])->name('sponsorship.edit');
Route::put('/sponsorship/{sponsorship}', [SponsorshipController::class, 'update'])->name('sponsorship.update');
Route::get('/filter-data', [SponsorshipController::class, 'filterData']);

Route::get('/login', [LoginController::class,'index']);
