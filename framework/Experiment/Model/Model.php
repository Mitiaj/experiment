<?php

namespace Experiment\Model;

class Model extends \Experiment\Model\EModel
{
    public function __construct()
    {
        echo "mode works";
    }

    /**
     * @return Model instance
     */
    public static function getInstance()
    {
        return new self();
    }

    public function test()
    {

    }
}