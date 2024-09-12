<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreelancerTitleRequest extends FormRequest
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
        $rules = [];
      
        if($this->has('title')){
            $rules['title'] = 'required|string|min:4';
        }
        if($this->has('hourly_rate')){
            $rules['hourly_rate'] = 'required|numeric|min:5';
        }
        if($this->has('receive_fee')){
            $rules['receive_fee'] = 'required';
        }
        // Store location validation
        if($this->has('country')){
            $rules['country'] = 'required';
        }
        if($this->has('street_address')){
            $rules['street_address'] = 'required';
        } 
        if($this->has('country_states')){
            $rules['country_states'] = 'required';
        }
        if($this->has('country_state_city')){
            $rules['country_state_city'] = 'required';
        }
        if($this->has('phone')){
            $rules['phone'] = 'numeric|digits:10';
        }
        if($this->has('filename')){
            $rules['filename'] = 'file|mimes:jpg,png,jpeg|max:5000';
        }
       return $rules;
    }

    public function messages(){
        return [
            'country_states.required' => 'State field is required',
            'country_state_city.required' => 'City field is required!',
            'hourly_rate.min' => 'The hourly rate must be at least :min',

        ];
    }
}
