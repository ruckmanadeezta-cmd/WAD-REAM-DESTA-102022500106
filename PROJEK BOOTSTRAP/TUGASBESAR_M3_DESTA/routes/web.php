<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;


Route::get('/', [KamarController::class, 'index']);
Route::resource('kamar', KamarController::class);
