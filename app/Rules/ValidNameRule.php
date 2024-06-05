<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidNameRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Check for trailing spaces
        if (trim($value) !== $value) {
            return false;
        }

        // Check for multiple spaces in between
        if (strpos($value, '  ') !== false) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The name field should not have trailing spaces or multiple spaces in between.';
    }
}
