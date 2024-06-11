<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendHireRequest extends FormRequest
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
        $rules['contractTitle'] = 'required';
        $rules['payment_option'] = 'required';
        $rules['fixed_price'] = 'required';

        if($this->input('fixedType')=='2'){
            $rules['milestone_description.*'] = 'required';
            $rules['deposit_amount.*'] = 'required';
        }
        return $rules;
    }

    public function messages(){
        return [
            'milestone_description.*.required' => ' Enter the name of your milestone ',
            'deposit_amount.*.required' => 'Enter the amount ',
        ];
    }
}
