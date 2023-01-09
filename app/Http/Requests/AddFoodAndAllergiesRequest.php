<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddFoodAndAllergiesRequest extends FormRequest
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
            "foodDiet"    => "required|array|min:0",
            "foodDiet.*"  => "required|string|distinct|min:0",
            "foodAllergies"    => "required|array|min:0",
            "foodAllergies.*"  => "required|string|distinct|min:0",
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
