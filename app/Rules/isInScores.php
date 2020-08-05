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
    public function __construct($host, $guest,$season)
    {
        //
        $this->host=$host;
        $this->guest = $guest;
        $this->season = $season;
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
       $isExist = Score::where(['host_id'=>$this->host,'guest_id'=>$this->guest,'season_id'=>$this->season])->count();

       if($isExist>0){
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
        return 'This Match Was Entered Earlier.';
    }
}
