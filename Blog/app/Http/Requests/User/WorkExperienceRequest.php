<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class WorkExperienceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company' => 'required|string|max:255',
            'start_date' => 'required|date', // Validate as a date
            'end_date' => 'nullable|date|after:start_date', // Already checks that start_date is before end_date
            'role' => 'required|string|max:255',
        ];

        // if(request()->filled('end_date')){
        //     // $rules['start_date'][] = 'before:end_date';
        //     $rules['start_date'] .= '|before:end_date';
        // }

        // if ($this->filled('end_date')) {
        //     $rules['start_date'] = ['required', 'date', 'before:end_date'];
        // }

       // return $rules;
            
    }
}
