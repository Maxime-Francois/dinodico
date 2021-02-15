<?php

namespace Dinodico\Models;

use Dinodico\Utils\Database;

class Type extends CoreModel
{
    private $name;
    private $color;
    
    public static function findAll()
    {
        $sql = '
            SELECT *
            FROM type
            ';
        return (Database::getPDO()->query($sql)->fetchAll(\PDO::FETCH_CLASS, Type::class));
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }
}