<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
use Illuminate\Http\Request;
use Laravel\Pail\ValueObjects\Origin\Console;

class UserController extends Controller
{
    public function redirectRegister()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {  
       // $validatedRequest = $request->validated();

       //dd($request->all());

    $validateRequest = $request->validated();  
    dd($validateRequest);

    }
}
 