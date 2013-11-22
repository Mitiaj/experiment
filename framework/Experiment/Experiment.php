<?php

require 'Core.php';

use \Experiment\Model;

class Experiment extends \Experiment\Core
{
    public function __construct()
    {

    }

    /**
     * @var application instance
     */
    private static  $_app = null;

    /**
     * Run the application
     */
    public function run()
    {
        $model = new Model();
        $model->test();
    }

    /**
     * @return application instance
     */
    public static function app()
    {
        if(is_null(self::$_app)){
            self::$_app = new self();
            return self::$_app;
        }else{
            return self::$_app;
        }
    }

    /**
     * @param $app application instance
     * @throws Exception application can be created only one
     */
    public static function setApplication($app)
    {
        if(self::$_app===null || $app===null)
            self::$_app=$app;
        else
            throw new Exception('application can be created only once');
    }

    /**
     * Loads all nessessary libraries
     *
     * @param $className
     * @throws Exception unable to load file
     */
    public static function __autoload($className)
    {
        // follow PSR-0 to determine the class file
        if (($pos = strrpos($className, '\\')) !== false) {
            // namespaced class
            $path = str_replace('\\', '/', substr($className, 0, $pos + 1))
                . str_replace('_', '/', substr($className, $pos + 1)) . '.php';
        } else {
            $path = str_replace('_', '/', $className) . '.php';
        }

        if(!include(BASE_URL.'/framework/'.$path)){
            throw new Exception($path.'--'.$className);
        }
    }
}