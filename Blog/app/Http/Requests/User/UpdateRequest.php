<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return Auth::check(); //return true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email,' . Auth::user()->id,
                'max:255'
            ],
            'current_password' => [
                'required_if_accepted:password', 
                'nullable',
                'current_password',
                'string'
            ],
            'password' => [
                'nullable',
                'string',
                'confirmed',
                Password::min(8)
                ->max(12)
                ->mixedCase()
                ->symbols()
                ->numbers()

            ]
        ];
    }
}
