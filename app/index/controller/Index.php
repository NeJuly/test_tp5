<?php
namespace app\index\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{

    public function __construct(Request $request = null)
    {
        config('before','beforeAction');
        parent::__construct($request);
    }

    public function index()
    {
        dump(config());
    }
}
