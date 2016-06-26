<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Language;
use AppBundle\Form\Type\FormExampleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new FormExampleType(), new Language());

        return ['form' => $form->createView()];
    }
}
