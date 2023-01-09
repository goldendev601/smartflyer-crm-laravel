<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Rules\PhoneNumberValidationRule;

class UserSettingRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => [ 'nullable', 'max:30', new PhoneNumberValidationRule() ],
            'address' => ['nullable', 'string', 'max:255'],
            'image_relative_url' => 'mimes:jpg,jpeg,png,PNG',
            'dobY' => ['nullable', 'numeric', 'min:1800', 'max:' . now()->year ],
            'dobD' => ['nullable', 'numeric', 'min:1', 'max:31' ],
        ];
    }

    public function withValidator($validator)
    {
        $messages = $validator->messages();

        foreach ($messages->all() as $message)
        {
            toastr()->error($message, 'Error');
        }

        return $validator->errors()->all();

    }
}