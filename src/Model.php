<?php

class Model
{
    private static $data = null;

    private static function load()
    {
        self::$data = unserialize(file_get_contents(Config::$model['path'].Config::$model['file']));
    }

    private static function save()
    {
        file_put_contents(Config::$model['path'].Config::$model['file'], serialize(self::$data));
    }

    private static function clear()
    {
        self::$data = null;
    }

    public static function get($variable)
    {
        self::load();
        $result = self::$data[$variable];
        self::clear();
        return $result;
    }

    public static function set($variable, $value)
    {
        self::load();
        self::$data[$variable] = $value;
        self::save();
        self::clear();
    }
}
