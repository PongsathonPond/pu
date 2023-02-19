<?php

use App\Http\Controllers\asnform;
use App\Http\Controllers\patientController;
use App\Models\patient;
use App\Models\asnForm1;
use App\Models\asnForm2;
use App\Models\User;
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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        $countpat = patient::all()->count();
        $countasn1 = asnForm1::all()->count();
        $countasn2 = asnForm2::all()->count();
        $countuser = User::all()->count();
        $ans = asnForm2::all()->where('sumtotal','<=',20);
        return view('dashboard',compact('countpat','countasn1','countasn2','countuser','ans'));
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
    Route::post('patindex-update/{id}', [patientController::class, 'update']);
    Route::get('/patindex/delete/{id}', [patientController::class, 'delete']);
});
