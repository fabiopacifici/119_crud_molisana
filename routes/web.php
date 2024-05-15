<?php

use App\Http\Controllers\PastaController;
use App\Models\Pasta;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PastaController::class, 'index'])->name('home');

Route::resource('/pastas', PastaController::class);
