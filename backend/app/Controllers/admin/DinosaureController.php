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
    public function products($params) {

        // $dinosaure = new Dinosaure();
         $dinosaures = Dinosaure::findAll();
 
         $this->show('backoffice/product-backoffice', [
             'dinosaures' => $dinosaures
         ]);
     }


     /**
     * Méthode s'occupant d'afficher le formulaire d'ajout d'un dinosaure
     *
     * @return void
     */
    public function productAdd($params) {

       // $dinosaure = new Dinosaure();
       
        $this->show('backoffice/product-add', [
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
    // $picture = filter_input(INPUT_POST, 'picture', FILTER_SANITIZE_STRING);
    $types = filter_input(INPUT_POST, 'types', FILTER_SANITIZE_STRING);
    

    //on créer un nouvel objet type    
      $dinosaure = new dinosaure();

      // ont attribut a ses propriétées les donnée en POST
      $dinosaure->setNom($nom);
      $dinosaure->setTaille($taille);
      $dinosaure->setPoids($poids);
      $dinosaure->setTypes($types);
      
      

    //ont insère l'objet a la base de donnée
      $dinosaure->insert();

    

    //ont redirige apres soumission du formulaire a la liste des types
    header('Location: http://localhost:8888/Dinodico/backend/public/admin/product');
      
    }
        
}

     
    




