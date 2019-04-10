<?php

class View
{
    private $content = null;

    private $varNames = [];
    private $varValues = [];

    public function __construct($template)
    {
        $this->content = file_get_contents(Config::$view['path'].$template.'.tpl');
    }

    public function setVariable($variable, $value)
    {
        array_push($this->varNames, '{%'.$variable.'%}');
        array_push($this->varValues, $value);
    }

    public function render()
    {
        return str_replace($this->varNames, $this->varValues, $this->content);
    }
}
