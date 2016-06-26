<?php

namespace CustomExtendedChoiceBundle\Form\Type;

use CustomExtendedChoiceBundle\Repository\CustomRepositoryInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CustomType extends AbstractType
{
    private $name;
    /** @var  CustomRepositoryInterface */
    private $customRepository;

    public function __construct(CustomRepositoryInterface $customRepository, $name)
    {
        $this->customRepository = $customRepository;
        $this->name = $name;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'choices' => $this->customRepository->getChoices()
        ]);
    }

    public function getParent()
    {
        return 'choice';
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return $this->name;
    }
}