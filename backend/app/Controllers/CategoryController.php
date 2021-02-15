<?php

namespace Dinodico\Controllers;

use Dinodico\Models\Dinosaure;


class CategoryController extends CoreController
{
      /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function categories($params) {

       // $dinosaure = new Dinosaure();

        $this->show('backoffice/categories-backoffice', [
        
        ]);
    }
    
    public function error404() {
        echo ('404');
    }
}
