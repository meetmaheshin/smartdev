<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientAccountInfoRequest extends FormRequest
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
            'firstName' => 'required|regex:/^[\pL\s\-]+$/u',
            'lastName' => 'required|regex:/^[\pL\s\-]+$/u',
            'filename' => 'nullable','image','mimes:jpeg,jpg,png,PNG,JPG,JPEG|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'firstName.regex' => 'first name must be string',
            'lastName.regex' => 'last name must be string',
            'filename.max' => 'File size must be 2 mb',

        ];
    }
}
