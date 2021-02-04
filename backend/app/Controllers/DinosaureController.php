<?php

namespace Dinodico\Controllers;

use Dinodico\Models\Dinosaure;

class DinosaureController extends CoreController
{
    public function dinosaure($params) {
        $dinosaure = new Dinosaure();
        $dinosaureDetails = $dinosaure->find($params['id']);
        $dinosaureTypes = $dinosaure->getTypes($params['id']);
        $this->show('dinosaure', [
            'dinosaure' => $dinosaureDetails,
            'types' => $dinosaureTypes,
        ]);
    }
}
