<?php

namespace Dinodico\Controllers;

use Dinodico\Models\Dinosaure;


class ProductController extends CoreController
{
      /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function products($params) {

       // $dinosaure = new Dinosaure();

        $this->show('backoffice/product-backoffice', [
        
        ]);
    }
    
    public function error404() {
        echo ('404');
    }
}
