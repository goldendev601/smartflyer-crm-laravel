<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPartnershipInterestFormRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:300'],
            'email' => ['required', 'email'],
            'commission_percentage_offer' => 'numeric',
            // 'type_of_business' => ['required'],
        ];
    }

    public function withValidator($validator)
    {
        $messages = $validator->messages();

        foreach ($messages->all() as $message) {
            toastr()->error($message, 'Error');
        }

        return $validator->errors()->all();
    }

    public function messages()
    {
        return
            [
                'name.required' => 'Name field is required!',
                'email.required' => 'Email field is required!',
                // 'type_of_business.required' => 'Type of business field is required!',
            ];
    }
}
