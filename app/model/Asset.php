<?php

namespace app\model;

class Asset extends BaseModel
{
    protected $table = 'assets';

    protected $fillable = [ 'asset_type', 'path' ];
}
