<?php

namespace Dinodico\Controllers\admin;

use Dinodico\Models\Dinosaure;


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
        
        ]);
    }
    

    /**
     * Méthode s'occupant de l'ajout d'un dinosaure
     *
     * @return void
     */
    public function add($params) {

        
     }

     
    public function error404() {
        echo ('404');
    }
}


