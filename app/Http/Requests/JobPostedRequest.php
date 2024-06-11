<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class JobPostedRequest extends FormRequest
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
            'budget' => 'required',
            'hourly_to' => [
                'required_if:budget,hourly',
                function ($attribute, $value, $fail) {
                    if ($this->input('budget') === 'hourly' && $value < $this->input('hourly_from')) {
                        $fail('Hourly rate must be greater than starting charges when budget type is hourly.');
                    }
                },
            ],
            'project_budget' => 'required_if:budget,project',
        ];
    }

    public function messages()
    {
        return [
            'budget.required' => 'Please select a budget type',
            'hourly_to.required_if'=>'Hourly Rates are required',
            'project_budget.required_if'=>'Project Budget is required',
            'hourly_to.integer' => 'Hourly Rates must be an integer.',
            'hourly_to.gt' => 'Hourly Rate must be greater than starting charges'
        ];
    }
}
