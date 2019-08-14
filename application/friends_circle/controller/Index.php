<?php
namespace app\friends_circle\controller;

class Index
{
    public function index()
    {
        return $this->hello('friends_circle');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
