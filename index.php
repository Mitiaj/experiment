<?php
/**
 * define path to the Experiment.php file
 */
include (__DIR__).'/framework/Experiment/Experiment.php';
spl_autoload_register('Experiment::__autoload');

/**
 * Defined base url
 */
define('BASE_URL', (__DIR__));

/**
 * run application
 */
try{
    $app = new \Experiment();
    $app->run();
}catch(Exception $e){
    echo $e->getMessage();
}
