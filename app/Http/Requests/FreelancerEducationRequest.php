<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FreelancerEducationRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize(): bool
	{
		return true;
	}
	
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [];
		
		// CREATE
		if (in_array($this->method(), ['POST', 'CREATE'])) {
			$rules = $this->storeRules();
		}
		return $rules;
	}
	
	/**
	 * @return array
	 */
	private function storeRules(): array
	{
        $rules = [
			'school' => 'required|max:191',
			'fieldOfStudy' => 'required|max:191',
            'degree' => 'required|max:191',
            'start_year' => 'required',
            'end_year' => 'required|after_or_equal:start_year',
		];

        return $rules;
	}
	
	/**
	 * Get custom messages for validator errors.
	 *
	 * @return array
	 */
	public function messages()
    {
        return [
            'school.required' => 'School is required!'
        ];
    }
}
