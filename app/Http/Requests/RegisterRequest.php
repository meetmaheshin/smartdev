<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => 'required|string|regex:/^[a-zA-Z]+$/u',
            'lastname' => 'required|string|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email|unique:users,email',
            'country_id'=>"required",
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'terms'=>'required',
            'is_admin'=>'nullable'
        ];
    }
}
