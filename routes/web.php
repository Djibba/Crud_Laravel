<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientPipoController;
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

Route::get('/', [ClientController::class, 'index'])-> name('index');

Route::resource('clients', ClientPipoController::class);

// Route::get('/create', [ClientController::class, 'create'])-> name('createClient');
// Route::post('/store', [ClientController::class, 'store'])-> name('storeClient');
// Route::get('/update/{id}', [ClientController::class, 'update'])-> name('updateClient');
// Route::put('/storeUpdate/{id}', [ClientController::class, 'storeUpdate'])-> name('storeUpdateClient');
// Route::delete('/delete/{id}', [ClientController::class, 'delete'])-> name('deleteClient');
