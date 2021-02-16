<?php

namespace Dinodico\Controllers\admin;

use Dinodico\Models\Dinosaure;


class AdminController extends CoreController
{
      /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home($params) {

       // $dinosaure = new Dinosaure();

        $this->show('backoffice/index-backoffice', [
        
        ]);
    }
    
    public function error404() {
        echo ('404');
    }
}
