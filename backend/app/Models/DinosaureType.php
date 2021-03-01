<?php

namespace Dinodico\Models;

class dinosaureType extends CoreModel
{
    private $dinosaure_id;
    private $type_id;

    /**
     * Get the value of dinosaure_id
     */ 
    public function getDinosaure_Id()
    {
        return $this->dinosaure_id;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_Id()
    {
        return $this->type_id;
    }
}
