<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',[UserController::class,'index2']);

require __DIR__.'/auth.php';
