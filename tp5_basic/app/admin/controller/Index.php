<?php
namespace app\admin\controller;

class Index extends \think\Controller
{
    public function index()
    {
//        dump(config());die();
        $this->assign('isassign','这里是assign分配的值');
//        return $this->display('这里是display内容：{$isassign},还有{$name}',[
//            'name'=>'display的第二个参数'
//        ]);
        return $this->fetch('index',[
            'name'=>'里斯',
            'email'=>'33'
        ],['STATIC'=>'这里的是替换内容']);

//        return $this->fetch('index', [
//            'name' => 'ThinkPHP',
//            'email' => 'thinkphp@qq.com'
//        ]);
//        return $this->display('index', [
//            'name' => 'ThinkPHP',
//            'email' => 'thinkphp@qq.com'
//        ]);
    }
}
