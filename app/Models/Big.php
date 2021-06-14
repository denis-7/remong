<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Big extends Model
{
    //
    protected $collection = 'big';
    
    protected $connection = 'mongodb';

    
}
