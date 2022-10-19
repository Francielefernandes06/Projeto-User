<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddressController;

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

Route::get('/', [PostController::class, 'showForm'])->name('home');
Route::post('/form',[PostController::class, 'submitForm'])->name('form');


Route::resource('usuarios', UserController::class)->names('user')->parameters(['usuarios' => 'user']);
Route::get('/endereco/{address}', [AddressController::class, 'show'])->name('user.show');




