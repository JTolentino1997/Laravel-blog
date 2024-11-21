<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticateMiddleware;
use Illuminate\Support\Facades\Request;
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
Route::get('/register', [UserController::class, 'redirectRegister'])
->middleware(AuthenticateMiddleware::class)
->name('users.redirectLogin');

Route::post('/register', [UserController::class, 'register'])
->name('users.register');
//end

//start
Route::get('/experience', [UserController::class, 'redirectWorkExperience'])
->middleware(AuthenticateMiddleware::class)
->name('users.redirect-redirectWorkExperience');

Route::post('/experience', [UserController::class, 'workExperience'])
->name('users.workExperience'); 
//end

 Route::delete('experience/delete/{id}', [UserController::class, 'deleteEmployee'])
 ->name('delete-employee');

Route::get('/login',[UserController::class, 'redirectLogin'])
->name('users.redirectLogin');

Route::post('/login', [UserController::class, 'login'])
->name('users.login');



Route::get('logout', [UserController::class, 'logout'])
->name('users.logout');

 

Route::view('/dashboard', 'dashboard')
->middleware(AuthenticateMiddleware::class)
->name('dashboard');

// Route::view('/dashboard', 'dashboard')
// ->name('dashboard');


Route::get('/showAuthUser', [UserController::class, 'showAuthUser'])
->name('users.showAuthUser');


Route::fallback(function(){
    return 'Not Found1';
});


Route::get('/updateRegister', [UserController::class, 'redirectUpdateRegister'])
->name('users.redirect-updateRegister');
 
Route::post('/updateRegister', [UserController::class, 'updateRegister'])
->name('users.updateRegister');
// Route::get('/', function()
// {
//     return "<script>alert('hello')</script>";
// });


// Route::prefix('/users')->group(function() {

//     Route::get('{id?}', function($id = 1) {
//         return "User Id is : $id";
//     });
// });

Route::get('/registerSample', function(Request $request){
    $name = $request->query('name', 'james');
    dd($name);
});


Route::prefix('/users')->group(function() {
    Route::get('{id?}', [UserController::class, 'show'])->name('users.show');
});


Route::get('/registerSample', [UserController::class, 'registerTest'])
->name('users.registerTest');



Route::get('/Employees', [UserController::class, 'showEmployees'])
->name('users.showEmployees');