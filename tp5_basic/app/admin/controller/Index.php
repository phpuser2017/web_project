<?php
namespace app\admin\controller;

class Index extends \think\Controller
{
    public function index()
    {
        dump(request()->domain());//http://tp
        dump(request()->pathinfo());//admin/index/index/5.html
        dump(request()->path());//admin/index/index/5
    }
}
