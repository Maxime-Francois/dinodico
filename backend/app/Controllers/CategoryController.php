<?php

namespace Dinodico\Controllers;

use Dinodico\Models\Dinosaure;
use Dinodico\Models\Type;


class CategoryController extends CoreController
{
      /**
     * Méthode s'occupant de la page d'accueil
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
    
    public function error404() {
        echo ('404');
    }
}
