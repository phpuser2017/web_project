<?php
namespace app\admin\controller;
use think\Db;
use app\admin\model\User;

class Index
{
    public function index()
    {
//        $user=new User;
//        $res=$user::get(2);
//        $res=User::where('id',3)
//            ->field('name,email')
//            ->find()
//            ->toArray();
//        $res=User::get(function($query){
//            $query->where('name','like','%张%')
//                ->field('name,email');
//        });
//        $res=User::all(function($query){
//            $query->where('id','>','1')
//                ->field('name,email');
//        });
//        $res=User::all(function($query){
//            $query->where('id','>','1')
//                ->field('name,email');
//        });
//        foreach ($res as $va){
//            $all[]=$va->toArray();
//        }
//        dump($all);
        //第二个参数为数组，数组中为允许添加的字段
        $res=User::create([
            'name' => 'thinkphp',
            'pass' => '12345',
            'email' => 'thinkphp@qq.com',
            'phone'=>'135123345678'
        ],true);
        dump($res->id);//获取添加的id
        dump($res);//create方法返回的是当前模型的对象实例。
    }
}
