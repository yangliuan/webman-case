<?php

namespace app\api\admin\controller;

use support\Request;

class DeviceController
{
    public function index(Request $request)
    {
        return response(__CLASS__);
    }

}
