<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\WorkExperienceRequest;
use App\Models\WorkExperience;
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
        
    }

    public function redirectWorkExperience()
    {
        return view('workExperience');
    }

    public function workExperience(WorkExperienceRequest $request)
    {
        $validatedRequest = $request->validated(); 
        dd($validatedRequest);

        // $exp = WorkExperience::create([
        //         'user_id' => 1,
        //         'company' => 'Google',
        //         'start_date' => now(),
        //         'end_date' => now(),
        //         'role' => 'Software Engineer',
        // ]);

        // return response()->json(['message' => 'Successfully registered', 'data' => $exp]);

        // $validatedRequest = $request->validated();
        // $user = WorkExperience::created($validatedRequest);
    }
}
 