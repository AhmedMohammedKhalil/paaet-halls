<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoFridayAndSaturday implements ValidationRule
{

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //dd(date('l',strtotime($value)));
        if (in_array(strtolower(date('l',strtotime($value))), ['friday', 'saturday'])) {
             $fail('يجب ان يكون الحجز فى ايام العمل الرسمية');
        }
    }
}
