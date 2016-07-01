<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Jouer")
 */

class Jeux
{   
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateJeux;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     */
    private $utilisateur;
    /**
     * @ORM\ManyToOne(targetEntity="Combinaison")  
     */
    private $combinaison;

    /**
     * Set dateJeux
     *
     * @param \DateTime $dateJeux
     *
     * @return Jouer
     */
    public function setDateJeux($dateJeux)
    {
        $this->dateJeux = $dateJeux;

        return $this;
    }

    /**
     * Get dateJeux
     *
     * @return \DateTime
     */
    public function getDateJeux()
    {
        return $this->dateJeux;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Jouer
     */
    public function setUtilisateur(Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set idCombinaison
     *
     * @param integer $idCombinaison
     *
     * @return Jouer
     */
    public function setCombinaison(Combinaison $combinaison)
    {
        $this->combinaison = $combinaison;

        return $this;
    }

    /**
     * Get idCombinaison
     *
     * @return integer
     */
    public function getCombinaison()
    {
        return $this->combinaison;
    }
}
