<?php

namespace Experiment\Model;

echo 'file loaded';

abstract class EModel
{
    /**
     * @return self instance
     */
    public abstract static  function getInstance();

}
