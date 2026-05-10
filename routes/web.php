<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[FrontendController::class, 'about']);

Route::get('/contact',[FrontendController::class, 'contact']);

Route::get('/product',[FrontendController::class, 'product']);
Route::get('/truth',[FrontendController::class, 'truth']);
  
Route::post('/submit',[FrontendController::class, 'submit']);
Route::post('/send',[FrontendController::class, 'send']);

Route::post('/register',[FrontendController::class, 'reg']); 
Route::get('/register',[FrontendController::class, 'register']); 

Route::get('/table',[FrontendController::class, 'table'])->name('table'); 

Route::get('/edit/{id}',[FrontendController::class, 'edit'])->name('editpage'); 

Route::post('/update/{register}',[FrontendController::class, 'update'])->name('update');