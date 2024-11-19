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
        

        Auth::login($user);
        
         //dd($validatedRequest);
        // $reg = User::create([
        //     'name' => 'JM',
        //     'email' => 'jm@email.com',
        //     'password' => 'Admin!'
        // ]); 
        return redirect()->route('dashboard')
                         ->with('success', 'You have successfully  added new user!');
 
      //  return redirect()->route('users.workExperience');
    //   return redirect()->route('dashboard');
    //   return view('dashboard');
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
        
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect()->route('users.login');
    }

    public function showAuthUser()
    {
        return redirect()
        ->back()
        ->with('success', 'Medicine deleted successfully.');
        // return view('showAuthUser');
    }

    public function redirectUpdateRegister()
    {
        return view('updateRegister');
        // return redirect()->route('updateRegister');
    }

    public function updateRegister(StoreRequest $request)
    {
        $validatedRequest = $request->validated();

        // $id = Auth::user()->id;
        // dd($validatedRequest);

        $id = Auth::user()->id;
        $user = User::find($id);

        $user->name = $validatedRequest['name'];
        $user->email = $validatedRequest['email'];

        if($validatedRequest['password'])
        {
            $user->password =  $validatedRequest['password'];
        }

        $user->save();

        return redirect()->route('dashboard')->with('success', 'You have successfully updated your registration!');
    }
}
 