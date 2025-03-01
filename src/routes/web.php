<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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

Route::get('/register/step1', [ContactController::class, 'register1']);
Route::get('/register/step2', [ContactController::class, 'register2']);
Route::get('/login', [ContactController::class, 'login']);

Route::post('/register/step2', [ContactController::class, 'users']);
Route::post('/weight_logs', [ContactController::class, 'weight_target']);
//Route::post('/contacts', [ContactController::class, 'store']);