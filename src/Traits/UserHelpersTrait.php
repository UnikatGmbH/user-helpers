<?php

namespace Unikat\UserHelpers\Traits;

use Carbon\Carbon;

trait UserHelpers
{
    
    /**
     * @var string
     */
    protected $birthdayColumn = 'birthday';
    
    /**
     * @var string
     */
    protected $birthdayFormat = 'Y-m-d';
    
    public function calculateAge()
    {
        $now = Carbon::now();
        
        if($this->birthday) {
            $birthday = Carbon::parse($this->birthday);
            
            return $now->diffInYears($birthday);
        }
        
        return '';
    }
}