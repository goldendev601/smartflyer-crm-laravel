<?php


namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumberValidationRule implements Rule
{


    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $match = [];
        preg_match("/[+]{1}[0-9]{10,15}/" , $value, $match);
       return  count($match) && strlen( $match[0] ) === strlen($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The :attribute may only contain + and numbers. minimum of 10 digits.";
    }
}
