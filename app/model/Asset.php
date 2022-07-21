<?php

namespace app\model;
class Asset extends BaseModel
{
    protected $table = 'assets';

    protected $fillable = [ 'asset_type', 'path' ];

    public function device()
    {
        return $this->belongsToMany(Device::class,'device_asset','dev_id','asset_id')
            ->using(DeviceAsset::class);
    }
}
