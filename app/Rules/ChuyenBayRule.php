<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ChuyenBayRule implements Rule
{

    protected $attribute = [];
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

        
        if ($value <  date('Y-m-d H:i:s')) {
            return false;
        } else {

            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Giờ đến không thể nhỏ hơn thời gian hiện tại';
    }
}
