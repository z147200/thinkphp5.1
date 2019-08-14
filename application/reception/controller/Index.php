<?php
namespace app\reception\controller;

class Index
{
    public function index()
    {
        return $this->hello('reception');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
