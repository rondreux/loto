<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="historique")
 */
class Historique
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $dateTirage;

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
     * @ORM\Column(type="integer")
     */
    private $p1;

    /**
     * @ORM\Column(type="float")
     */
    private $g1;

    /**
     * @ORM\Column(type="integer")
     */
    private $p2;

    /**
     * @ORM\Column(type="float")
     */
    private $g2;

    /**
     * @ORM\Column(type="integer")
     */
    private $p3;

    /**
     * @ORM\Column(type="float")
     */
    private $g3;

    /**
     * @ORM\Column(type="integer")
     */
    private $p4;

    /**
     * @ORM\Column(type="float")
     */
    private $g4;

    /**
     * @ORM\Column(type="integer")
     */
    private $p5;

    /**
     * @ORM\Column(type="float")
     */
    private $g5;

    /**
     * @ORM\Column(type="integer")
     */
    private $p6;

    /**
     * @ORM\Column(type="float")
     */
    private $g6;




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
     * Get dateTirage
     *
     * @return string
     */
    public function getDateTirage()
    {
        return $this->dateTirage;
    }

     /**
     * Set dateTirage
     *
     * @param string $dateTirage
     *
     * @return string
     */
    public function setDateTirage($dateTirage)
    {
        $this->dateTirage = $dateTirage;

        return $this;
    }

    /**
     * Set boule1
     *
     * @param integer $boule1
     *
     * @return int
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
     * @return integer
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
     * @return integer
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
     * @return integer
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
     * @return integer
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
     * @return integer
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

    /**
     * Get p1
     *
     * @return integer
     */
    public function getP1()
    {
        return $this->p1;
    }

     /**
     * Set p1
     *
     * @param integer $p1
     *
     * @return integer
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * Get g1
     *
     * @return float
     */
    public function getG1()
    {
        return $this->g1;
    }


    /**
     * Set g1
     *
     * @param float $g1
     *
     * @return float
     */
    public function setG1($g1)
    {
        $this->g1 = $g1;

        return $this;
    }


     /**
     * Get p2
     *
     * @return integer
     */
    public function getP2()
    {
        return $this->p2;
    }


    /**
     * Set p2
     *
     * @param integer $p2
     *
     * @return integer
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * Get g2
     *
     * @return float
     */
    public function getG2()
    {
        return $this->g2;
    }


    /**
     * Set g2
     *
     * @param float $g2
     *
     * @return float
     */
    public function setG2($g2)
    {
        $this->g2 = $g2;

        return $this;
    }

     /**
     * Get p3
     *
     * @return integer
     */
    public function getP3()
    {
        return $this->p3;
    }


    /**
     * Set p3
     *
     * @param integer $p3
     *
     * @return integer
     */
    public function setP3($p3)
    {
        $this->p3 = $p3;

        return $this;
    }

    /**
     * Get g3
     *
     * @return float
     */
    public function getG3()
    {
        return $this->g3;
    }


    /**
     * Set g3
     *
     * @param float $g3
     *
     * @return float
     */
    public function setG3($g3)
    {
        $this->g3 = $g3;

        return $this;
    }

     /**
     * Get p4
     *
     * @return integer
     */
    public function getP4()
    {
        return $this->p4;
    }


    /**
     * Set p4
     *
     * @param integer $p4
     *
     * @return integer
     */
    public function setP4($p4)
    {
        $this->p4 = $p4;

        return $this;
    }

    /**
     * Get g4
     *
     * @return float
     */
    public function getG4()
    {
        return $this->g4;
    }


    /**
     * Set g4
     *
     * @param float $g4
     *
     * @return float
     */
    public function setG4($g4)
    {
        $this->g4 = $g4;

        return $this;
    }

     /**
     * Get p5
     *
     * @return integer
     */
    public function getP5()
    {
        return $this->p5;
    }


    /**
     * Set p5
     *
     * @param integer $p5
     *
     * @return integer
     */
    public function setP5($p5)
    {
        $this->p5 = $p5;

        return $this;
    }

    /**
     * Get g5
     *
     * @return float
     */
    public function getG5()
    {
        return $this->g5;
    }


    /**
     * Set g5
     *
     * @param float $g5
     *
     * @return float
     */
    public function setG5($g5)
    {
        $this->g5 = $g5;

        return $this;
    }

     /**
     * Get p6
     *
     * @return integer
     */
    public function getP6()
    {
        return $this->p6;
    }


    /**
     * Set p6
     *
     * @param integer $p6
     *
     * @return integer
     */
    public function setP6($p6)
    {
        $this->p6 = $p6;

        return $this;
    }

    /**
     * Get g6
     *
     * @return float
     */
    public function getG6()
    {
        return $this->g6;
    }


    /**
     * Set g6
     *
     * @param float $g6
     *
     * @return float
     */
    public function setG6($g6)
    {
        $this->g6 = $g6;

        return $this;
    }


}