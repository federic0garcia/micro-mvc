<?php

class Config
{
    public static $model = [
        'path' => __DIR__.'/../data/',
        'file' => 'model.data'
    ];

    public static $router = [
        '/' => ['controller' => 'CardController', 'method' => 'index'],
        '/edit' => ['controller' => 'CardController', 'method' => 'edit'],
        '/update' => ['controller' => 'CardController', 'method' => 'update'],
    ];

    public static $view = [
        'path' => __DIR__.'/templates/'
    ];
}
