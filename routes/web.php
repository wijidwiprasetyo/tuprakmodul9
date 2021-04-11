<?php

use App\Http\Controllers\mahasiswaController;
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

Route::get('/', [mahasiswaController::class,'home']);
Route::get('/insert', [mahasiswaController::class,'insert']);
Route::get('/delete', [mahasiswaController::class,'delete']);
Route::get('/sort/nama', [mahasiswaController::class,'sortByNama']);
Route::get('/sort/ipk', [mahasiswaController::class,'sortByIPK']);
Route::get('/search', [mahasiswaController::class,'search']);
Route::get('/detail/{id}', [mahasiswaController::class,'detail']);
Route::get('/hapus/{id}', [mahasiswaController::class,'hapus']);
