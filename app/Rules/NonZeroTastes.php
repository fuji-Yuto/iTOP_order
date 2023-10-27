<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Rule;

class NonZeroTastes implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        
    }

    public function passes($attribute, $value)
    {
        return $value['taste1'] != 0 || $value['taste2'] != 0 || $value['taste3'] != 0;
    }

    public function message()
    {
        return '個数を選択してください';
    }
}
