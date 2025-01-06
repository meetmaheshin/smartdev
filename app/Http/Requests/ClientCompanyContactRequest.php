<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientCompanyContactRequest extends FormRequest
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
            // 'firstNameContact' => 'required',
            'phone' => 'required|numeric|digits:10',
            'timeZone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'zip' => 'required|regex:/^[A-Za-z0-9\- ]{3,}$/',
        ];
    }

    public function messages()
    {
        return [
            'phone.digits' => 'Phone no must be 10 digits',
            'phone.numeric' => 'Phone no must be number',
        ];
    }
}
