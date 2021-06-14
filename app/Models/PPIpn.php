<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class PPIpn extends Model
{
    //
    protected $collection = 'ipn';
    
    protected $connection = 'mongodb';

    
}
