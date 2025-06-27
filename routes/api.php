<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\galeri;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\MobilController;
// use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//route mobil
Route::get('/mobil', [MobilController::class, 'index']);

//route artikel
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{id}', [ArtikelController::class, 'getById']);

//route galeri
Route::get('/galeri', [GaleriController::class, 'index']);
