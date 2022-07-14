<?php

namespace app\model;

use app\traits\DateFormat;
use support\Model;

class BaseModel extends Model
{   
    use DateFormat;
    
    protected $primaryKey = 'id';

    protected $keyType = 'int';

    public $incrementing = true;

    public $timestamps = true;

    protected $dateFormat = 'Y-m-d H:i:s';
}
