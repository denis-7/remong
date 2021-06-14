<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class PPWebhook extends Model
{
    //
    protected $collection = 'webhook';
    
    protected $connection = 'mongodb';

    
}
