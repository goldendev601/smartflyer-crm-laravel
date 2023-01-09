<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumberValidationRule;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberFormat;
use Propaganistas\LaravelPhone\PhoneNumber;
use Propaganistas\LaravelPhone\Rules\Phone as PhoneRule;
use Propaganistas\LaravelPhone\Exceptions\CountryCodeException;
use Propaganistas\LaravelPhone\Exceptions\NumberParseException;
use Propaganistas\LaravelPhone\Exceptions\NumberFormatException;

class AddClientRequest extends FormRequest
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


        $rules = [
            'client_first_name' => ['required', 'string', 'max:255'],
            'client_middle_name' => ['nullable', 'string', 'max:255'],
            'client_last_name' => ['required', 'string', 'max:255'],
//             'client_email' => ['required', 'string','unique:client,email', 'email', 'max:255'],

//            'client_phone' => 'nullable|phone:1:AUTO,US',

            'client_phone' => [ 'required_if:form_type,==,2', 'max:30', new PhoneNumberValidationRule() ],

//            'address' => ['required','nullable', 'string', 'max:250'],
//            'likes' => ['required', 'string', 'max:250'],
//            'dislikes' => ['required', 'string', 'max:250'],
//            'client_dobY' => ['required', 'numeric', 'min:1800', 'max:' . now()->year ],
//            'profile_picture_relative_url' => 'mimes:jpg,jpeg,png,PNG',
//            'documents.*' => 'mimes:doc,docx,pdf,jpg,jpeg,png,PNG',
//            'social_facebook_url' => ['required', 'url', 'max:250'],
//            'social_instagram_url' => ['required', 'url', 'max:250'],
//            'social_linkedin_url' => ['required', 'url', 'max:250'],
//            'social_twitter_url' => ['required', 'url', 'max:250'],
//            'social_custom_url' => ['required', 'url', 'max:250'],
//            'note' => ['required','nullable', 'string', 'max:250'],
//            'rc_name.*' => ['required','string', 'max:250'],
//            'rc_email.*' => ['required','email', 'string','distinct', 'max:250'],
//            'imd_eventName.*' => ['required', 'max:250'],
//            'impd_frequency.*' => ['required', 'max:250'],
//            'impd_notes.*' => ['required'],
//            'impd_dobM.*' => ['required'],
//            'impd_dobD.*' => ['required'],
//            'impd_dobY.*' => ['required'],
//            'im_loyaltyProgram.*' => ['required'],
//            'im_number.*' => ['required'],
        ];


        if ($this->route()->getName() == 'updateclient') {
            $clientId = $this->route()->parameter('id');
            $rules['client_email'] = ['required', 'string', 'email', 'max:255', 'unique:client,email,'.$clientId];
        }else {

            $rules['client_email'] = ['required', 'string', 'email', 'max:255', 'unique:client,email'];
        }

        return $rules;
    }

//    public function withValidator($validator)
//    {
//        $messages = $validator->messages();
//
//        foreach ($messages->all() as $message)
//        {
//            toastr()->error($message, 'Error');
//        }
//
//        return $validator->errors()->all();
//
//    }

    public function messages()
   {
       return
       [
           'client_first_name.required' => 'Please enter first name.',
           'client_middle_name.required' => 'Please enter middle name.',
           'client_last_name.required' => 'Please enter last name.',
           'client_email.required'  => 'Email address is required!',
//           'client_dobY' => 'Birthday is required!',
           'client_phone'=>'Please enter a valid phone number!',
//           'profile_picture_relative_url'=>'Photo should be jpg & png',
//           'documents'=>'Document should be doc,pdf,docx,jpg & png',
//           'address'=>'Address can have max 250 characters ',
//           'likes'=>'Likes can have max 250 characters ',
//           'dislikes'=>'Dislikes can have max 250 characters ',
//           'rc_name.*.required' => 'This field is required',
//           'rc_email.*.distinct' => 'The related contact email has duplicate.',
//           'rc_email.*.required' => 'The related contact email is required.',
//           'imd_eventName.*.required' => 'Event name is required.',
//           'impd_frequency.*.required' => 'Frequency is required.',
//           'impd_notes.*.required' => 'Note is required.',
//           'im_loyaltyProgram.*.required' => 'Rewards / Loyalty program is required.',
//           'im_number.*.required' => 'Number is required.',
       ];
   }
}
