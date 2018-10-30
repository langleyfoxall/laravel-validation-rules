<?php

namespace LangleyFoxall\LaravelValidationRules\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class UKPostcode
 *
 * @package LangleyFoxall\LaravelValidationRules\Rules
 */
class UKPostcode implements Rule
{
    /**
     * @var array
     */
    public static $invalidPostcodes = [
        'KT185DN',
        'AB154YR',
        'B628RS',
    ];

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $uppercasePostCode = strtoupper($value);

        if (in_array(str_replace(' ', '', $uppercasePostCode), self::$invalidPostcodes)) {
            return false;
        }

        $regex = '#^(GIR ?0AA|[A-PR-UWYZ]([0-9]{1,2}|([A-HK-Y][0-9]([0-9ABEHMNPRV-Y])?)|[0-9][A-HJKPS-UW]) ?[0-9][ABD-HJLNP-UW-Z]{2})$#';

        $result = preg_match($regex, $uppercasePostCode);

        return $result ? true : false;
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must a valid UK postcode.';
    }
}
