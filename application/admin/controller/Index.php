<?php
namespace app\admin\controller;

class Index
{
    public function index()
    {
        return $this->hello('admin');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
