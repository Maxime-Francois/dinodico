<?php

namespace Dinodico\Controllers\admin;

use Dinodico\Models\Dinosaure;
use Dinodico\Models\Type;


class DinosaureController extends CoreController
{
     /**
     * Méthode s'occupant d' afficher la liste des dinosaures
     *
     * @return void
     */
    public function dinosaureList($params) {

         $dinosaures = new Dinosaure();
 
         $this->show('backoffice/dinosaure-list', [
             'dinosaures' => $dinosaures->findAll(),
            //  'types' => $dinosaures->getTypes($params[])
         ]);
     }


     /**
     * Méthode s'occupant d'afficher le formulaire d'ajout d'un dinosaure
     *
     * @return void
     */
    public function dinosaureForm($params) {

       
       
        $this->show('backoffice/dinosaure-form', [
            'types' => type::findAll(),
        
        ]);
    }
    

    /**
     * Méthode s'occupant de l'ajout d'un dinosaure
     *
     *
     */
    public function add() {
        
       
         // on recupère les données en POST dans des variables 

    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $taille = filter_input(INPUT_POST, 'taille', FILTER_SANITIZE_STRING);
    $poids = filter_input(INPUT_POST, 'poids', FILTER_SANITIZE_STRING);
   $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_NUMBER_INT);
    $picture = filter_input(INPUT_POST, 'picture', FILTER_VALIDATE_URL);
    
    

    //on créer un nouvel objet dinosaure    
      $dinosaure = new Dinosaure();
      

      // ont attribut a ses propriétées les donnée en POST
      $dinosaure->setNom($nom);
      $dinosaure->setTaille($taille);
      $dinosaure->setPoids($poids);
      $dinosaure->setTypes($type);
      $dinosaure->setPicture($picture);

      dump($dinosaure);
     
    //ont insère l'objet a la base de donnée
     $dinosaure->insert();
      

    

    //ont redirige apres soumission du formulaire a la liste des dinosaures
    header('Location: http://localhost:8888/Dinodico/backend/public/admin/dinosaures');
      
    }
        
}

     
    




