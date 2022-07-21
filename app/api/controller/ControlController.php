<?php

namespace app\api\controller;

use support\Request;

class ControlController
{
    public function index(Request $request)
    {
        return response(__CLASS__);
    }

}
