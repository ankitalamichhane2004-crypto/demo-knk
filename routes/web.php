<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[FrontendController::class, 'about']);

Route::get('/contact',[FrontendController::class, 'contact']);

Route::get('/product',[FrontendController::class, 'product']);
  
Route::post('/submit',[FrontendController::class, 'submit']);