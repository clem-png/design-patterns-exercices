<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config {
    private static $_instance;
    private static $_settings;

    public static function getSetting(){
        if(is_null(self::$_instance)){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }
    private function __construct(){
        self::$_settings = require __DIR__ . '/../config/config.php';
    }

    public function getValue($key){
        return self::$_settings[$key] ?? null;
    }
}