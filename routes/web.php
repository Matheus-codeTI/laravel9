<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('user', [UserController::class, 'show']);
Route::get('usuarios', [UserController::class, 'crud']);

// Route::get('/', function(){
//     return 'Olá mundo';
// });