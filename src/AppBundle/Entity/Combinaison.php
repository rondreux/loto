<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Combinaison")
 */

class Combinaison
{   
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\Column(type="integer")
     */
    private $boule1;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule2;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule3;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule4;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $boule5;

    /**
     * @ORM\Column(type="integer")
     */
    private $bouleComp;


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
     * Set boule1
     *
     * @param integer $boule1
     *
     * @return Combinaison
     */
    public function setBoule1($boule1)
    {
        $this->boule1 = $boule1;

        return $this;
    }

    /**
     * Get boule1
     *
     * @return integer
     */
    public function getBoule1()
    {
        return $this->boule1;
    }

    /**
     * Set boule2
     *
     * @param integer $boule2
     *
     * @return Combinaison
     */
    public function setBoule2($boule2)
    {
        $this->boule2 = $boule2;

        return $this;
    }

    /**
     * Get boule2
     *
     * @return integer
     */
    public function getBoule2()
    {
        return $this->boule2;
    }

    /**
     * Set boule3
     *
     * @param integer $boule3
     *
     * @return Combinaison
     */
    public function setBoule3($boule3)
    {
        $this->boule3 = $boule3;

        return $this;
    }

    /**
     * Get boule3
     *
     * @return integer
     */
    public function getBoule3()
    {
        return $this->boule3;
    }

    /**
     * Set boule4
     *
     * @param integer $boule4
     *
     * @return Combinaison
     */
    public function setBoule4($boule4)
    {
        $this->boule4 = $boule4;

        return $this;
    }

    /**
     * Get boule4
     *
     * @return integer
     */
    public function getBoule4()
    {
        return $this->boule4;
    }

    /**
     * Set boule5
     *
     * @param integer $boule5
     *
     * @return Combinaison
     */
    public function setBoule5($boule5)
    {
        $this->boule5 = $boule5;

        return $this;
    }

    /**
     * Get boule5
     *
     * @return integer
     */
    public function getBoule5()
    {
        return $this->boule5;
    }

    /**
     * Set bouleComp
     *
     * @param integer $bouleComp
     *
     * @return Combinaison
     */
    public function setBouleComp($bouleComp)
    {
        $this->bouleComp = $bouleComp;

        return $this;
    }

    /**
     * Get bouleComp
     *
     * @return integer
     */
    public function getBouleComp()
    {
        return $this->bouleComp;
    }

}
