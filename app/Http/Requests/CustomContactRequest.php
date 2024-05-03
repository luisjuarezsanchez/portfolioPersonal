<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomContactRequest extends FormRequest
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
            'email' => 'required',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El campo email es obligatorio',
            'name.required' => 'El campo nombre es obligatorio',
            'subject.required' => 'El campo asunto es obligatorio',
            'message.required' => 'El campo mensaje es obligatorio'
        ];
    }
}
