<?php

namespace app\index\model;

use think\Model;

class test extends Model
{
    protected $auto = [
        'update_time'
    ];
    protected $insert = [
        'create_time',
        'update_time'
    ];
    protected $update = [
        'update_time'
    ];
    public function setCreateTimeAttr(){
        return date('Y-m-d H:i:s',time());
    }

    public function setUpdateTimeAttr(){
        return date('Y-m-d H:i:s',time());
    }
}
