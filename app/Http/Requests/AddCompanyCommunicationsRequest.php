<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCompanyCommunicationsRequest extends FormRequest
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
            'title' => ['required'],
            'description' => ['required'],
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
                'title.required' => 'Title field is required!',
                'description.required' => 'Description field is required!',
            ];
    }
}
