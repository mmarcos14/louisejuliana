<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/**Route::get('/', function () {
    return ['Laravel' => app()->version()];
});**/

Route::get('/',[UserController::class,'index2']);

Route::get('/test2',[UserController::class,'index2']);

require __DIR__.'/auth.php';
