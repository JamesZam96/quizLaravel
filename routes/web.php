<?php

use App\Http\Controllers\PackageController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\TruckerController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
// Trucker routes
Route::get('truckers/list',[TruckerController::class,'index'])->name('trucker.index');
Route::get('truckers/create',[TruckerController::class,'create'])->name('trucker.create');
Route::post('truckers/store', [TruckerController::class,'store'])->name('truckers.store');
Route::get('truckers/{trucker}',[TruckerController::class,'show'])->name('trucker.show');
Route::put('trucker/{trucker}',[TruckerController::class,'update'])->name('trucker.update');
Route::delete('trucker/{trucker}',[TruckerController::class,'destroy'])->name('trucker.destroy');
Route::get('trucker/{trucker}/edit',[TruckerController::class,'edit'])->name('trucker.edit');

// Package routes
Route::get('packages/list',[PackageController::class,'index'])->name('package.index');
Route::get('packages/create',[PackageController::class,'create'])->name('package.create');
Route::post('packages/store', [PackageController::class,'store'])->name('packages.store');
Route::get('packages/{package}',[PackageController::class,'show'])->name('package.show');
Route::put('package/{package}',[PackageController::class,'update'])->name('package.update');
Route::delete('package/{package}',[PackageController::class,'destroy'])->name('package.destroy');
Route::get('package/{package}/edit',[PackageController::class,'edit'])->name('package.edit');


// Truck routes
Route::get('trucks/list',[TruckController::class,'index'])->name('truck.index');
Route::get('trucks/create',[TruckController::class,'create'])->name('truck.create');
Route::post('trucks/store', [TruckController::class,'store'])->name('trucks.store');
Route::get('trucks/{truck}',[TruckController::class,'show'])->name('truck.show');
Route::put('truck/{truck}',[TruckController::class,'update'])->name('truck.update');
Route::delete('truck/{truck}',[TruckController::class,'destroy'])->name('truck.destroy');
Route::get('truck/{truck}/edit',[TruckController::class,'edit'])->name('truck.edit');