<?php

namespace Dinodico\Models;

class dinosaureType extends CoreModel
{
    private $dinosaure_numero;
    private $type_id;

    /**
     * Get the value of pokemon_numero
     */ 
    public function getdinosaure_numero()
    {
        return $this->dinosaure_numero;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }
}
