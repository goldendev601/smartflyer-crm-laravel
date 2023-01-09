<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewInquiryRequest extends FormRequest
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
            ];
    }
}
