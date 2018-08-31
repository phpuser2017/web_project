<?php
namespace app\admin\controller;

class Index extends \think\Controller
{
    public function index()
    {
    	//获取地址栏信息：域名、路径
        dump(request()->domain());//http://tp
        dump(request()->pathinfo());//admin/index/index/5.html
        dump(request()->path());//admin/index/index/5
        dump(request()->url());// /admin/index/index/name/zhansan.html?age=19
        dump(request()->baseurl());// /admin/index/index/name/zhansan.html
        //获取传递的方法
        dump(request()->method());//GET
        //判断传递方式
        dump(request()->isGet());
        dump(request()->isPost());
        dump(request()->isAjax());
        //获取参数
        dump(request()->get());
        dump(request()->post());
        dump(request()->param());//可以获取路径中的param
        //获取session
        session('name','school');
        dump(request()->session());
        dump(request()->cookie());
        //获取模块、控制器、方法
        dump(request()->module());//admin
        dump(request()->controller());//Index
        dump(request()->action());//index


    }
}
