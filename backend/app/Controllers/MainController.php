<?php

namespace Dinodico\Controllers;

use Dinodico\Models\Dinosaure;


class MainController extends CoreController
{
      /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home($params) {

        $dinosaure = new Dinosaure();

        $this->show('index', [
            'dinosaures' => $dinosaure->findAll(),
        ]);
    }
    
    public function error404() {
        echo ('404');
    }
}
