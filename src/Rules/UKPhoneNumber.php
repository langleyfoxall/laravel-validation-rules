<?php

namespace LangleyFoxall\LaravelValidationRules\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class UKPhoneNumber
 *
 * @package LangleyFoxall\LaravelValidationRules\Rules
 */
class UKPhoneNumber implements Rule
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
        $regex = '/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/';
        $result = preg_match($regex, $value);
        return $result ? true : false;
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must a valid UK phone number.';
    }
}
