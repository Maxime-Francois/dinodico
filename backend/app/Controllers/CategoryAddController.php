<?php

namespace Dinodico\Controllers;

use Dinodico\Models\Dinosaure;


class CategoryAddController extends CoreController
{
      /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function categoryAdd($params) {

       // $dinosaure = new Dinosaure();

        $this->show('backoffice/category-add', [
        
        ]);
    }
    
    public function error404() {
        echo ('404');
    }
}
