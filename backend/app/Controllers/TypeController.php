<?php

namespace Dinodico\Controllers;

use Dinodico\Models\Type;
use Dinodico\Models\Dinosaure;

class TypeController extends CoreController
{
    public function types($params) {
        $type = new Type();
        $this->show('types-list', [
            'types' => $type->findAll(),
        ]);
    }

    public function type($params) {
        $dinosaure = new Dinosaure();

        $this->show('index', [
            'dinosaures' => $dinosaure->findAllFromType($params['id']),
        ]);
    }
}