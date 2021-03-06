<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Equipo
 *
 * @ORM\Table(name="equipos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EquipoRepository")
 */
class Equipo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\Asesor")  
     *  @ORM\JoinColumn(name="asesor", referencedColumnName="id") 
     */ 
    private $asesor;

    /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\Robot")  
     *  @ORM\JoinColumn(name="robot", referencedColumnName="id") 
     */ 
    private $robot;

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
     * Set asesor
     *
     * @param \AppBundle\Entity\Asesor $asesor
     * @return Asesor 
     */
    public function setAsesor($asesor)
    {
        $this->asesor = $asesor;
    }

    /**
     * Get asesor
     *
     * @return \AppBundle\Entity\Asesor
     */
    public function getAsesor()
    {
        return $this->asesor;
    }

    /**
     * Set robot
     *
     * @param \AppBundle\Entity\Robot $robot
     * @return Robot 
     */
    public function setRobot($robot)
    {
        $this->robot = $robot;
    }

    /**
     * Get robot
     *
     * @return \AppBundle\Entity\Robot
     */
    public function getRobot()
    {
        return $this->robot;
    }

    public function __toString() 
    { 
        return $this->getRobot()->getNombre(); 
    } 
}