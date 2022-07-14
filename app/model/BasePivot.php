<?php

namespace app\model;

use app\traits\DateFormat;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BasePivot extends Pivot
{
    use DateFormat;

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    public $incrementing = true;

    public $timestamps = true;

    protected $dateFormat = 'Y-m-d H:i:s';
}
