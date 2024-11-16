<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkExperienceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company' =>'required|string|max:255',
            'dateStart' =>'required|string|before:dateEnd|max:255', 
            'dateEnd' => 'nullable|date|after:dateStart',
            'role' => 'required|string|max:255',
        ];
    }
}
