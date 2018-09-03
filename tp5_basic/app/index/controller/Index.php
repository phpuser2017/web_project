<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->assign('name','ThinkPHP');
        return $this->fetch('index/index');
//        return $this->fetch('index', [
//            'name' => 'ThinkPHP',
//            'email' => 'thinkphp@qq.com'
//        ]);
//        return view('index',[
//            'name'=>'里斯',
//            'email'=>'33'
//        ]);
    }
}
