<?php

namespace Dinodico\Models;

use Dinodico\Utils\Database;

class Dinosaure extends CoreModel
{
    private $nom;
    private $taille;
    private $types;
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



    public function insert()
    {
        // Récupération de l'objet PDO représentant la connexion à la DB
        $pdo = Database::getPDO();

        // Ecriture de la requête INSERT INTO
        $sql = "
            INSERT INTO `dinosaures` (nom, taille, poids)
            VALUES ('{$this->nom}', '{$this->taille}', '{$this->poids}')
        ";

        // Execution de la requête d'insertion (exec, pas query)
        $insertedRows = $pdo->exec($sql);

        // Si au moins une ligne ajoutée
        if ($insertedRows > 0) {
            // Alors on récupère l'id auto-incrémenté généré par MySQL
            $this->id = $pdo->lastInsertId();

            // On retourne VRAI car l'ajout a parfaitement fonctionné
            return true;
            // => l'interpréteur PHP sort de cette fonction car on a retourné une donnée
        }
        
        // Si on arrive ici, c'est que quelque chose n'a pas bien fonctionné => FAUX
        return false;
    }


    /**
     * Set the value of Types
     *
     * @param  string  $types
     */
    public function setTypes(string $types)
    {
        $this->types = $types;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set the value of name
     *
     * @param  string  $name
     */
    public function setNom( string $nom)
    {
        $this->nom = $nom;
    }
    

    

    /**
     * Get the value of taille
     */ 
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set the value of taille
     *
     * @param  string  $taille
     */
    public function setTaille(string $taille)
    {
        $this->taille = $taille;
    }

   /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @param  string  $poids
     */
    public function setPoids(string $poids)
    {
        $this->poids = $poids;
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