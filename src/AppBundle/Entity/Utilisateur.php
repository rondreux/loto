<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Utilisateur")
 */

class Utilisateur
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
    private $email;

     /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
    * @ORM\OneToMany(targetEntity="Jeux",mappedBy="Jeux")
    */
    private $jeux;

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
     * Set email
     *
     * @return varchar
     */
    public function setEmail($email)
    {     
        $this->email = $email;

       return $this;
    }

      /**
     * Get email
     *
     * @return varchar
     */
    public function getEmail()
    {
        return $this->email;
    }


          /**
     * Set password
     *
     * @return varchar
     */
    public function setPassword($password)
    {
        
        $this->password = $password;

        return $this;
    }

      /**
     * Get password
     *
     * @return varchar
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->jeux = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add jeux
     *
     * @param \AppBundle\Entity\Jeux $jeux
     *
     * @return Utilisateur
     */
    public function addJeux(\AppBundle\Entity\Jeux $jeux)
    {
        $this->jeux[] = $jeux;

        return $this;
    }

    /**
     * Remove jeux
     *
     * @param \AppBundle\Entity\Jeux $jeux
     */
    public function removeJeux(\AppBundle\Entity\Jeux $jeux)
    {
        $this->jeux->removeElement($jeux);
    }

    /**
     * Get jeux
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJeux()
    {
        return $this->jeux;
    }
}
