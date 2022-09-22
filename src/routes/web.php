<?php

use Illuminate\Support\Facades\Route;
use Yomi\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index']);
Route::post('contact',[ContactController::class,'store'])->name('storeContact');



