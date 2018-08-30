<?php
namespace app\api\controller;

class Index
{
    public function index()
    {
        return 'api index index';
    }
    public function test()
    {
        return 'api index test';
    }
    public function showname($name)
    {
        return "{$name}";
    }
}