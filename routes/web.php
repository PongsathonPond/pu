<?php

use App\Http\Controllers\asnform;
use App\Http\Controllers\patientController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/patindex', [patientController::class, 'index'])->name('pat');
    Route::post('patindex/store', [patientController::class, 'store'])->name('pat.store');
    Route::get('/patindex/{id}', [asnform::class, 'edit']);
    Route::get('/patindex2/{id}', [asnform::class, 'edit2']);
    Route::post('formstore1', [asnform::class, 'storeform'])->name('form1');
    Route::post('formstore2', [asnform::class, 'storeform2'])->name('form2');
    Route::get('/review', [asnform::class, 'index'])->name('reviewall');
    Route::get('/review1/{id}', [asnform::class, 'findreview1']);
    Route::get('/review2/{id}', [asnform::class, 'findreview2']);
});
