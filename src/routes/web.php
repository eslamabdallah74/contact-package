<?php

use Illuminate\Support\Facades\Route;
use Yomi\Contact\Http\Controllers\ContactController;

Route::group(['middleware' => ['web']], function() {
    Route::get('contact',[ContactController::class,'index']);
    Route::post('contact',[ContactController::class,'store'])->name('storeContact');
});




