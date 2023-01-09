<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddImportantDateRequest extends FormRequest
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
            'imd_eventName' => ['required'],
            'impd_frequency' => ['required'],
            'impd_notes' => ['required'],
            'impd_dobM' => ['required'],
            'impd_dobD' => ['required'],
            'impd_dobY' => ['required'],

        ];
    }
    public function messages()
    {
        return [
            'imd_eventName.required' =>'Please enter Name/Event.',
            'impd_frequency.required' =>'Please enter notes.',
            'impd_notes.required' =>'Please select  frequency.',
            'impd_dobM.required' =>'Please select day.',
            'impd_dobD.required' =>'Please select month.',
            'impd_dobY.required' =>'Please enter year.',
        ];

    }
}
