<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Au extends Model
{
    //
    protected $collection = 'au';
    
    protected $connection = 'mongodb';

    //protected $CREDIT_NUMBER;

    public function getCreditAttribute()
    {
        return $this->attributes['CREDIT_NUMBER'];
    }

    public function setCreditAttribute($value)
    {
        $this->attributes['CREDIT_NUMBER'] = $value;
    }
}
