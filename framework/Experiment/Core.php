<?php

namespace Experiment;

abstract class Core
{
    /**
     * @var instance of application
     */
    private static $_app;

    /**
     * Run an application
     */
    public abstract function run();

    /**
     * @retun instance of the application
     */
   public abstract static function app();

    /**
     * @param $app application instance
     */
    public abstract static function setApplication($app);



}