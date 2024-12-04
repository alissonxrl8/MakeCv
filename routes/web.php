<?php

use App\Http\Controllers\MakeCvController;
use Illuminate\Support\Facades\Route;


Route::get('makecv/', [MakeCvController::class,'index'])->name('makecv.index');
Route::get('makec/create', [MakeCvController::class, 'create'])->name('makecv.create');
Route::post('makecv/processar', [MakeCvController::class, 'viewCv'])->name('makecv.viewCv');
