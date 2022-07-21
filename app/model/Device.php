<?php

namespace app\model;
class Device extends BaseModel
{
    protected $table = 'devices';

    protected $fillable = [
        'mac_address', 'alias',
    ];

    public function asset()
    {
        return $this->belongsToMany(Asset::class, 'device_asset', 'dev_id', 'asset_id')
            ->withTimestamps()
            ->using(DeviceAsset::class);
    }
}
