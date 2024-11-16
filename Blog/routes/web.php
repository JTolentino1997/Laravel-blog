<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/register', 'register')
// ->name('register');

// Route::name('users.')->prefix('users')->group(function()
// {
//     Route::view('/register','register')->name('registerSample');
// });

// Route::name('users1.')->prefix('users2')->group(function(){
//     Route::view('/register2',[UserController::class, 'register'])
//     ->name('register1');
// });

 
//start
Route::get('/register', [UserController::class, 'redirectRegister'])->name('users.redirectLogin');
Route::post('/register', [UserController::class, 'register'])->name('users.register');
//end

//start
Route::get('/experience', [UserController::class, 'redirectWorkExperience'])
->name('users.redirect-redirectWorkExperience');

Route::post('/experience', [UserController::class, 'workExperience'])
->name('users.workExperience');

//end
