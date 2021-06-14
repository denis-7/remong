<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class JustBought extends Model
{
    //
    protected $collection = 'just_bought';
    
    protected $connection = 'mongodb';

    
}
