<?php

namespace Dinodico\Controllers\admin;

use Dinodico\Models\Dinosaure;


class LoginController extends CoreController
{
      /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function login($params) {

       // $dinosaure = new Dinosaure();

        $this->show('backoffice/login', [
        
        ]);

    
    }
    public function loginPost($params) {

        // $dinosaure = new Dinosaure();
 
         $this->show('backoffice/login', [
         
         ]);
    }
    
    public function error404() {
        echo ('404');
    }
}
