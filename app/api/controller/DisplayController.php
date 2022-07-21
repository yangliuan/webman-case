<?php

namespace app\api\controller;

use app\model\Asset;
use support\Request;
use Tinywan\Validate\Facade\Validate;

class DisplayController
{
    public function asset(Request $request)
    {
        $validate = Validate::rule([
            'mac' => 'require|max:17',
        ]);

        if (!$validate->check($request->all())) {
            return json([ 'code' => 422, 'msg' => $validate->getError() ]);
        }

        $asset = Asset::select('id', 'asset_type', 'path')
            ->whereHas('device', function ($query) use ($request) {
                $query->where('mac_address', $request->input('mac'));
            })
            ->get();

        return json([ 'code' => 200, 'msg' => 'success', 'asset' => $asset ]);
    }
}
