<?php

use App\Http\Controllers\testcontrollers;
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

Route::get('/', [testcontrollers::class, 'index']);
Route::get('{id}', [testcontrollers::class, 'show']);
