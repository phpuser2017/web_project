<?php
namespace app\admin\controller;

class Index extends \think\Controller
{
    public function index()
    {
        $this->assign('isassign','这里是assign分配的值');
        $this->assign('time',time());
        $this->assign('name','张三');
        // $this->assign('email','178675994@qq.com');
        return $this->fetch();
    }
}
