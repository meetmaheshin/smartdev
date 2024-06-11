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

		if ($this->input('end_date_check')  == null) {
            $rules['start_date'] = 'required';
            $rules['end_date'] = 'required|after_or_equal:start_date';
        }
        $rules['company'] = 'required|max:191|regex:/^[\pL\s\-]+$/u';
        $rules['title'] = 'required|max:191';
        $rules['location'] = 'required';
        $rules['start_date'] = 'required';
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
