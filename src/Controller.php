<?php

class Controller
{
    public $params;

    public function __construct()
    {
        $this->params = $_POST;
    }

    public function redirect($method)
    {
        return $this->$method();
    }
}
