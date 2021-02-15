<?php

namespace Dinodico\Controllers;

use Dinodico\Models\Dinosaure;


class ProductAddController extends CoreController
{
      /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function productAdd($params) {

       // $dinosaure = new Dinosaure();

        $this->show('backoffice/product-add', [
        
        ]);
    }
    
    public function error404() {
        echo ('404');
    }
}
