<?php

namespace app\model;

class ControlInstruction extends BaseModel
{
    protected $table = 'control_instruction';

    protected $fillable = [
        'dev_id', 'action_type', 'action',
    ];
}
