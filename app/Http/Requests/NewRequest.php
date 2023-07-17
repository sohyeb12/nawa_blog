<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255|min:10',
            'new_text' =>'required|string|max:64000',
            'image' => 'nullable|image|dimensions:min_width=400,min-height:300|max:1024',
            
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'title is required',
        ];
    }
}
