<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FreelancerExperienceRequest extends FormRequest
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

		   // Check if 'end_date_check' is null
		// if ($this->input('end_date_check') == null) {
		// 	$rules['start_date'] = 'required|date|before_or_equal:today';
		// 	$rules['end_date'] = 'required|date|after_or_equal:start_date';
		// } else {
		// 	$rules['start_date'] = 'required|date|before_or_equal:today';
		// }

		// Apply end date validation only if the checkbox is not checked
		if ($this->missing('end_date_check')) {
			$rules['end_date'] = 'required|date|after_or_equal:start_date';
		}

		$rules['start_date'] = 'required|date|before_or_equal:today';
        $rules['company'] = 'required|string|max:191';
        $rules['title'] = 'required|max:191';
        $rules['location'] = 'required';
        $rules['country_id'] = 'required';
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
            'country_id.required' => 'Country is required!'
        ];
    }
}
