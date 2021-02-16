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
       
        $types = type::findall();

        
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

        
 
         $this->show('backoffice/category-add', [
         
         ]);
     }

/**
     * Méthode s'occupant d'ajouter une categorie
     *
     * 
     */
    public function add() {
        
    }


    public function error404() {
        echo ('404');
    }

}