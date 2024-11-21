<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\WorkExperienceRequest;
use App\Models\Profile;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
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
       // $this->showEmployees();

        $experience = WorkExperience::create([
            'company' => $request->company,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'role' => $request->role,
            'user_id' => Auth::id(),
        ]);

       return redirect()->back()
       ->with('success', 'Category updated successfully');
     //   return redirect()->route('users.redirect-redirectWorkExperience',  compact('workExperiences'))->with('success', 'You have successfully added new experience!');
        // $validatedRequest = $request->validated(); 

        // dd($validatedRequest);


        
        // $exp = WorkExperience::create([ 
        //         'company' => 'Google',
        //         'start_date' => now(),
        //         'end_date' => now(),
        //         'role' => 'Software Engineer',
        //         'user_id' => 1,
        // ]);

        // return response()->json(['message' => 'Successfully registered', 'data' => $exp]);

        // $validatedRequest = $request->validated();
       //  $user = WorkExperience::created($validatedRequest);
        // dd($validatedRequest);
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
        return redirect()->route('users.redirectLogin');
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
    //    return redirect()->route('updateRegister');
    }

    public function updateRegister(UpdateRequest $request)
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

        return redirect()->route('dashboard')
        ->with('success', 'You have successfully updated your registration!');
    }

    public function show(Request $request, $id = null)
    {
        // dd($request->all());
        // $profileModel = new Profile();
        return "USER ID: $id";

        // return $profileModel->getSomething();
    }

    public function registerTest(Request $request)
    {
        // $parameters = $request->boolean('is_active', true);

        // dd($parameters);

        // $request->merge([
        //     'user_id' => 1,
        //     'age' => 27

        // ]);

        // dd($request->all());

        // return view('register', [
        //     'data' => "Hello World!" ?? null
        // ]);

        $request->merge(['user_id' => 1]);
        dd($request->all()); 
    }



    public function showEmployees()
    {
        $workExperiences = workExperience::all();
        // dd($workExperiences);
        return view ('workExperience', compact('workExperiences'));
    }

    public function deleteEmployee($id)
    {
        $workExp = WorkExperience::find($id);

        if($workExp)
        {
            $workExp->delete();
            return redirect()->back()->with('success','Employee deleted successfully');
        } else {
            return redirect()->bak()->with('error','Employee not found');
        }
    }
}
