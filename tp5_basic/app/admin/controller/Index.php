<?php
namespace app\admin\controller;
use think\Db;
use app\admin\model\User;

class Index
{
    public function index()
    {
        // $res=User::create([
        //     'name' => 'thinkphp',
        //     'pass' => '67',
        //     'email' => 'thinkphp@qq.com',
        //     'phone'=>'135123345678'
        // ],true);
        // dump($res->id);//获取添加的id

       User::get(function($query){
            $query->where('id','<=',16);
        })->delete();
    }
}
