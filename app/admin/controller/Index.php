<?php
/**
 * Created by Maiya.
 * User: Junely
 * Date: 2018/6/6
 * Time: 23:37
 */

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{
    public function index()
    {
        dump(config());
    }
}