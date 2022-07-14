<?php

namespace app\model;


class DeviceAsset extends BasePivot
{
    protected $table = 'device_asset';

    protected $fillable = [
        'dev_id', 'asset_id','sort'
    ];
}
