<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddImportantNumberRequest extends FormRequest
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
            'im_loyaltyProgram' => 'required',
            'im_number' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'im_loyaltyProgram.required' =>'Please enter Rewards/loyalty program.',
            'im_number.required' =>'Please enter number.',
            'im_number.numeric' =>'Please enter only numeric value.',
        ];

    }
}
