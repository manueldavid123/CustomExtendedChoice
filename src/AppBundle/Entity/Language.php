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
    private $sections;

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

    /**
     * @return mixed
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * @param mixed $sections
     * @return Language
     */
    public function setSections($sections)
    {
        $this->sections = $sections;
        return $this;
    }



}