<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddFAQsRequest extends FormRequest
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
            'question' => ['required'],
            'answer' => ['required'],
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
                'question.required' => 'Question field is required!',
                'answer.required' => 'Answer field is required!',
            ];
    }
}
