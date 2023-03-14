<?php

use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;
use App\Models\Provider;
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

// show all data providers
Route::get('/', [ProviderController::class, 'index']);

// show the create data provider form
Route::get('/providers/create', [ProviderController::class, 'create']);

// store data provider
Route::post('/providers', [ProviderController::class, 'store']);

// show the edit form
Route::get('/providers/{provider}/edit', [ProviderController::class, 'edit']);

// edit an existing data provider
Route::put('/providers/{provider}', [ProviderController::class, 'update']);

// delete a data provider
Route::delete('/providers/{provider}', [ProviderController::class, 'destroy']);

// show image from API
Route::get('/image/{provider}', [ProviderController::class, 'image']);

// show single provider
Route::get('/providers/{provider}', [ProviderController::class, 'show']);