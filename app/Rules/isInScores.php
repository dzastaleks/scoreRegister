<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Score;
class isInScores implements Rule
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
       return Score::where('host_id','==',$value)->where('guest_id','==',$value)->count()==0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This Match Was Entered Earlier.';
    }
}
