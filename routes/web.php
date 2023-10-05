<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/', [UserController::class, 'index']);

Route::get('/teste/{id?}/{name?}', [UserController::class, 'teste'])->where(['id' => '[0-9]+', 'name' => '[a-z]+'])->name('testeSup');

Route::get('/main', function (){
    return view('./layouts/main');
});