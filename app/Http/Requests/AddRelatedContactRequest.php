<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRelatedContactRequest extends FormRequest
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
            'rc_name' => ['required'],
            'rc_relationship' => ['required'],
            'rc_dobM' => ['required'],
            'rc_dobD' => ['required'],
            'rc_dobY' => ['required'],
            'rc_email' => 'required|unique:client_contact,email,'.$this->related_contact_id,
        ];
    }
    public function messages()
    {
        return [
            'rc_name.required' =>'Please enter name.',
            'rc_relationship.required' =>'Please select relationship.',
            'rc_dobM.required' =>'Please select month.',
            'rc_dobD.required' =>'Please select day.',
            'rc_dobY.required' =>'Please select year.',
            'rc_email.required' =>'Please enter email.',
        ];

    }
}
