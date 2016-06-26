<?php

namespace AppBundle\Repository;

use CustomExtendedChoiceBundle\Repository\CustomRepositoryInterface;

class TreatmentRepository implements CustomRepositoryInterface
{
    public function getChoices() {
        return [
            'mr' => 'señor',
            'ms' => 'señora'
        ];
    }
}