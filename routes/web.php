<?php

use App\Http\Controllers\MainContoroller;
use Illuminate\Support\Facades\Route;



Route::get('/',[MainContoroller::class,'index']);
Route::get('/register',[MainContoroller::class,'Fromregister']);
Route::post('/register',[MainContoroller::class,'Resultregister']);
Route::get('/register/view',[MainContoroller::class, 'viewList']);
Route::get('register/delete/{id}',[MainContoroller::class, 'delete'])->name('DeleteCustoer');
Route::get('register/edit/{id}',[MainContoroller::class, 'edit'])->name('EditCustoer');
Route::post('register/update/{id}',[MainContoroller::class, 'update'])->name('UpdateCustoer');
Route::get('/update',[MainContoroller::class,'FromrUpdate']);
Route::post('/status',[MainContoroller::class,'StatusChange'])->name('StatusChangeRouter');
