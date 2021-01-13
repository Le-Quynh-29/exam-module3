<?php

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

Route::group(['prefix'],function (){
    Route::get('/',[\App\Http\Controllers\AgencyController::class,'index'])->name('agencys.list');
    Route::get('/create',[\App\Http\Controllers\AgencyController::class,'create'])->name('agencys.create');
    Route::post('/create',[\App\Http\Controllers\AgencyController::class,'store'])->name('agencys.store');
    Route::get('/edit/{id}',[\App\Http\Controllers\AgencyController::class,'edit'])->name('agencys.edit');
    Route::post('/edit/{id}',[\App\Http\Controllers\AgencyController::class,'update'])->name('agencys.update');
    Route::get('/delete/{id}',[\App\Http\Controllers\AgencyController::class,'destroy'])->name('agencys.delete');

    Route::post('/search',[\App\Http\Controllers\AgencyController::class,'search'])->name('agencys.search');


});
