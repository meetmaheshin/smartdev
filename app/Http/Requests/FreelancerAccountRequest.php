<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreelancerAccountRequest extends FormRequest
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
        if($this->has('firstname')){
            $rules['firstname'] = 'required|regex:/^[a-zA-Z ]*$/';
        }
        if($this->has('lastname')){
            $rules['lastname'] = 'required|regex:/^[a-zA-Z ]*$/';
        }
        if($this->has('desc')){
            $rules['desc'] = 'required|min:20';
        }
        if($this->has('title')){
            $rules['title'] = 'required|min:5';
        }
        if($this->has('skillIds')){
            $rules['skillIds'] = 'required';
        }
        if($this->has('specialities')){
            $rules['specialities'] = 'required';
        }
        if($this->has('timeZone')){
            $rules['timeZone'] = 'required';
        }
        if($this->has('country')){
            $rules['country'] = 'required';
        }
        if($this->has('country_states')){
            $rules['country_states'] = 'required';
        }
        if($this->has('country_state_city')){
            $rules['country_state_city'] = 'required';
        }
        if($this->has('phone')){
            $rules['phone'] = 'required|numeric|digits:10';
        }
        return $rules;
    }

    public function messages(){
        return [
            'desc.required' => 'Description field is required!',
            'desc.min' => 'Minimum 20 characters should allowed',
            'title.required' => 'Title field is required!',
            'title.min'      => 'Minimum 5 characters should allowed',
            'skillIds.required' => 'Please select at least on skill',
            'specialities.required' => 'Selecte at least on skill',
            'phone.digits' => 'Phone no must be 10 digit',
            'phone.numeric' => 'Phone no must be number',
            'country_states.required' => 'State field is required',
            'country_state_city.required' => 'City field is required!',
        ];
    }
}
