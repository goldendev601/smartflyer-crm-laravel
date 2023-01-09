<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordRequest extends FormRequest
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
            'current_password' => ['required', 'max:25', function ($attribute, $value, $fail) {
            if (!\Hash::check($value, Auth::user()->password)) {
                return $fail(__('The current password is incorrect.'));
            }
        }],
            'new_password' => ['required', 'max:25'],
            'confirm_new_password' => ['nullable', 'required_with:new_password', 'same:new_password']
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