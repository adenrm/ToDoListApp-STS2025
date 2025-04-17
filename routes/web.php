<?php

use App\Http\Controllers\ceoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\managerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PelaksanaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::prefix('admin')->group(function (){
    Route::get('/buat', [PageController::class, 'create'])->name('admin.create');
    Route::post('/store', [PageController::class, 'store'])->name('admin.store');
    Route::post('/edit', [PageController::class, 'edit'])->name('admin.edit');
    Route::post('/update', [PageController::class, 'update'])->name('admin.update');
    Route::delete('/hapus', [PageController::class, 'destroy'])->name('admin.destroy');
});

Route::prefix('ceo')->group(function (){
    Route::get('/buat', [ceoController::class, 'create'])->name('ceo.create');
    Route::post('/store', [ceoController::class, 'store'])->name('ceo.store');
    Route::post('/edit', [ceoController::class, 'edit'])->name('ceo.edit');
    Route::post('/update', [ceoController::class, 'update'])->name('ceo.update');
    Route::delete('/hapus', [ceoController::class, 'destroy'])->name('ceo.destroy');
});

Route::prefix('manager')->group(function (){
    Route::get('/buat', [managerController::class, 'create'])->name('manager.create');
    Route::post('/store', [managerController::class, 'store'])->name('manager.store');
    Route::post('/edit', [managerController::class, 'edit'])->name('manager.edit');
    Route::post('/update', [managerController::class, 'update'])->name('manager.update');
    Route::delete('/hapus', [managerController::class, 'destroy'])->name('manager.destroy');
});


Route::prefix('pelaksana')->group(function (){
    Route::post('/edit', [PelaksanaController::class, 'edit'])->name('pelaksana.edit');
    Route::post('/update', [PelaksanaController::class, 'update'])->name('pelaksana.update');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/sigin', [LoginController::class, 'signIn'])->name('sigin');

Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::get('/ceo', [ceoController::class, 'index'])->name('ceo');
Route::get('/manager', [managerController::class, 'index'])->name('manager');
Route::get('/pelaksana', [PelaksanaController::class, 'index'])->name('pelaksana');