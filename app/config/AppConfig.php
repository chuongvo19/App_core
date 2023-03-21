<?php

namespace Config;

class AppConfig
{
    private static $_basePathConfig = "/var/www/html/app/config"; 

    /**
     *  function render value config
     * @param string $configFileName
     * @param string $nameConfig
     * 
     * @return mixed $valConfig
     */
    public static function _config($configFileName, $nameConfig)
    {
        $config = include_once(self::$_basePathConfig . DIRECTORY_SEPARATOR . $configFileName.".php");
        $valConfig = $config[$nameConfig];
        
        return $valConfig;
    }
}