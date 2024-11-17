<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\WorkExperienceRequest;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function redirectRegister()
    {
        return view('register');
    }

    public function register(StoreRequest $request)
    {  
        $validatedRequest = $request->validated();
        $user = User::create($validatedRequest);
        
        
         dd($validatedRequest);
        // $reg = User::create([
        //     'name' => 'JM',
        //     'email' => 'jm@email.com',
        //     'password' => 'Admin!'
        // ]); 
 
      //  return redirect()->route('users.workExperience');
    }

    public function redirectWorkExperience()
    {
        return view('workExperience');
    }

    public function workExperience(WorkExperienceRequest $request)
    {
        $validatedRequest = $request->validated(); 
        // dd($validatedRequest);
        
        $exp = WorkExperience::create([
                'user_id' => 1,
                'company' => 'Google',
                'start_date' => now(),
                'end_date' => now(),
                'role' => 'Software Engineer',
        ]);

        // return response()->json(['message' => 'Successfully registered', 'data' => $exp]);

        // $validatedRequest = $request->validated();
         $user = WorkExperience::created($validatedRequest);
    }

    public function redirectLogin()
    {
        return view("login");
    }
    
    public function login(LoginRequest $request)
    {
        $validatedRequest = $request->validated();
        // dd($validatedRequest);

        $user = User::whereEmail($validatedRequest['email'])
        ->first();

        Auth::login($user);

        return "<h1>welcome your logged</h1>";
    }
}
 