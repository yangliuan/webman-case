<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace app\model{
/**
 * app\model\Asset
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Asset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset query()
 */
	class Asset extends \Eloquent {}
}

namespace app\model{
/**
 * app\model\BaseModel
 *
 * @property-read mixed $created_at
 * @property-read mixed $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 */
	class BaseModel extends \Eloquent {}
}

namespace app\model{
/**
 * app\model\ControlInstruction
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ControlInstruction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControlInstruction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControlInstruction query()
 */
	class ControlInstruction extends \Eloquent {}
}

namespace app\model{
/**
 * app\model\DeviceAsset
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAsset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAsset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAsset query()
 */
	class DeviceAsset extends \Eloquent {}
}

namespace app\model{
/**
 * app\model\Devices
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\app\model\Asset[] $asset
 * @property-read mixed $created_at
 * @property-read mixed $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Devices newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devices newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devices query()
 */
	class Devices extends \Eloquent {}
}

