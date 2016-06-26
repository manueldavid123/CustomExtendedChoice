<?php
/**
 * Created by PhpStorm.
 * User: Manuel
 * Date: 26/6/16
 * Time: 17:54
 */

namespace AppBundle\Entity;


class Language
{
    private $language;
    private $treatment;

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     * @return Language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * @param mixed $treatment
     * @return Language
     */
    public function setTreatment($treatment)
    {
        $this->treatment = $treatment;
        return $this;
    }
}