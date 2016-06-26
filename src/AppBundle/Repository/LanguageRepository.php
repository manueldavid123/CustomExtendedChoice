<?php

namespace AppBundle\Repository;

use CustomExtendedChoiceBundle\Repository\CustomRepositoryInterface;

class LanguageRepository implements CustomRepositoryInterface
{
    public function getChoices() {
        return [
            'es' => 'español',
            'ca' => 'catalan',
            'an' => 'andaluz'
        ];
    }
}