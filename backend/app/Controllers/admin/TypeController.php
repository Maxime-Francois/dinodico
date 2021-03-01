<?php

namespace Dinodico\Controllers\admin;

use Dinodico\Models\Dinosaure;
use Dinodico\Models\Type;


class TypeController extends CoreController
{
      /**
     * Méthode s'occupant de laffichage de la liste des categories
     *
     * @return void
     */
    public function categories($params) {

       // $dinosaure = new Dinosaure();
       
        $types = Type::findall();

        
        $this->show('backoffice/categories-backoffice', [
            'types' => $types
        
        ]);
    }
    
   

     /**
     * Méthode s'occupant d'afficher le formulaire pour éditer une categorie
     *
     * 
     */
    public function edit() {
     
     
    }
     /**
     * Méthode s'occupant d'éditer une categorie
     *
     * 
     */
    public function editAdd() {
     
     
    }
    
    /**
     * Méthode s'occupant d'afficher le formulaire pour supprimer une categorie
     *
     * 
     */
    public function delete() {
        
    }
     /**
     * Méthode s'occupant de supprimer une categorie
     *
     * 
     */
    public function deleteAdd() {
        
    }
    
 /**
     * Méthode s'occupant d'afficher le formulaire pour ajouter une categorie
     *
     * 
     */
    public function categoryAdd($params) {

        
        //dump($_POST);

        
         $this->show('backoffice/category-add', [
         
         ]);
     }

/**
     * Méthode s'occupant d'ajouter une categorie
     *
     * 
     */
    public function add() {

      // on recupère les données en POST dans des variables 

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);

    //on créer un nouvel objet type    
      $type = new type();

      // ont attribut a ses propriétées les donnée en POST
      $type->setName($name);
      $type->setColor($color);
      

    //ont insère l'objet a la base de donnée
      $type->insert();

    //ont redirige apres soumission du formulaire a la liste des types
    header('Location: http://localhost:8888/Dinodico/backend/public/admin/category');
    }


    public function error404() {
        echo ('404');
    }

}