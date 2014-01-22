<?php

namespace Admin\Prod\DphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dph
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Dph
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @var float
     *
     * @ORM\Column(name="multiple", type="float")
     */
    private $multiple;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=8)
     */
    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Dph
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set multiple
     *
     * @param string $multiple
     * @return Dph
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;

        return $this;
    }

    /**
     * Get multiple
     *
     * @return string 
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Dph
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
