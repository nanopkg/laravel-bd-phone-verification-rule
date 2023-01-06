<?php

namespace Nanopkg\LaravelBdPhoneVerificationRule\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class LaravelBdPhoneVerificationRule
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 *
 * @link https://iqbalhasan.dev Author Homepage
 *
 * @version 1.0.0
 *
 * @license LICENSE The MIT License
 */
class LaravelBdPhoneVerificationRule implements Rule
{
    protected $alias = 'bdPhone';

    public function __toString()
    {
        return $this->alias;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value, $parameters = [], $validator = null)
    {
        $pattern = "/^(?:\+88|88)?(01[3-9]\d{8})$/";
        try {
            return preg_match($pattern, $value);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute number is not valid. Please enter a valid Bangladeshi phone number.';
    }
}
