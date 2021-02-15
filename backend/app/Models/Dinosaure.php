<?php

namespace Dinodico\Models;

use Dinodico\Utils\Database;

class Dinosaure extends CoreModel
{
    private $nom;
    private $taille;
    private $poids;
    private $numero;
    private $picture;

    public static function findAll()
    {
        $sql = '
            SELECT *
            FROM dinosaures
            ';
        return (Database::getPDO()->query($sql)->fetchAll(\PDO::FETCH_CLASS, Dinosaure::class));
    }

    public static function find($id)
    {
        $sql = '
            SELECT *
            FROM dinosaures
            WHERE dinosaures.id = ' . $id
            ;
        return (Database::getPDO()->query($sql)->fetchObject(Dinosaure::class));
    }

    public function findAllFromType($id)
    {
        $sql = '
            SELECT
                dinosaures.id as id,
                dinosaures.nom as nom,
                dinosaures.numero as numero
            FROM type
            JOIN dinosaure_type ON dinosaure_type.type_id = type.id
            JOIN dinosaures ON dinosaure_type.dinosaure_numero = dinosaures.numero
            WHERE type.id = ' . $id
            ;

        return (Database::getPDO()->query($sql)->fetchAll(\PDO::FETCH_CLASS, Dinosaure::class));
    }
    
    public function getTypes($id)
    {
        $sql = '
            SELECT
                type.*
            FROM type
            JOIN dinosaure_type ON dinosaure_type.type_id = type.id
            JOIN dinosaures ON dinosaure_type.dinosaure_numero = dinosaures.numero
            WHERE dinosaures.id = ' . $id
            ;
        return (Database::getPDO()->query($sql)->fetchAll(\PDO::FETCH_CLASS, Type::class));
    }
    
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }
    

    public function getPercentStat($statNumber) {
        return ($statNumber * 100) / 255;
    }
    

    /**
     * Get the value of taille
     */ 
    public function getTaille()
    {
        return $this->taille;
    }

   /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @param  string  $picture
     */
    public function setPicture(string $picture)
    {
        $this->picture = $picture;
    }

}