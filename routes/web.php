<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReviewController;

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
    return view('welcome');
});
Route::get('/', [ReviewController::class, 'perfume']);
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::get('/reviews/{review}', [ReviewController::class ,'brand']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
Route::put('/reviews/{review}', [ReviewController::class, 'update']);
Route::delete('/reviews/{review}',[ReviewController::class,'delete']);


