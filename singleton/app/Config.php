<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config {
    private static $_settings;

    public static function getSetting(){
        if(is_null(self::$_settings)){
            self::$_settings = new Config();
        }
        return self::$_settings;
    }
    private function __construct(){
        self::getSetting();

    }

    public function getValue($key){
        return self::$_settings[$key];
    }
}