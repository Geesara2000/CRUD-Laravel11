<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[userController::class,'index'])->name('user.index');

Route::group(['prefix'=>'admin/user'],function(){
    Route::get('/create',[userController::class,'create'])->name('user.create');
    Route::post('/add',[userController::class,'store'])->name('user.store');
    Route::get('/edit/{id}',[userController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[userController::class,'update'])->name('user.update');
    Route::post('/delete',[userController::class,'destroy'])->name('user.delete');
});














