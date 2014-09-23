<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table(name="Auteur")
 * @ORM\Entity(repositoryClass="Indago\GeneralBundle\Entity\AuteurRepository")
 */
class Auteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_auteur", type="string", length=100, nullable=true)
     */
    private $nomAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_auteur", type="string", length=100, nullable=true)
     */
    private $prenomAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_auteur", type="string", length=100, nullable=true)
     */
    private $emailAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="sit_auteur", type="string", length=100, nullable=true)
     */
    private $sitAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="compte_auteur", type="string", length=100, nullable=true)
     */
    private $compteAuteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_auteur", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="Auteur_id_auteur_seq", allocationSize=1, initialValue=1)
     */
    private $idAuteur;



    /**
     * Set nomAuteur
     *
     * @param string $nomAuteur
     * @return Auteur
     */
    public function setNomAuteur($nomAuteur)
    {
        $this->nomAuteur = $nomAuteur;

        return $this;
    }

    /**
     * Get nomAuteur
     *
     * @return string 
     */
    public function getNomAuteur()
    {
        return $this->nomAuteur;
    }

    /**
     * Set prenomAuteur
     *
     * @param string $prenomAuteur
     * @return Auteur
     */
    public function setPrenomAuteur($prenomAuteur)
    {
        $this->prenomAuteur = $prenomAuteur;

        return $this;
    }

    /**
     * Get prenomAuteur
     *
     * @return string 
     */
    public function getPrenomAuteur()
    {
        return $this->prenomAuteur;
    }

    /**
     * Set emailAuteur
     *
     * @param string $emailAuteur
     * @return Auteur
     */
    public function setEmailAuteur($emailAuteur)
    {
        $this->emailAuteur = $emailAuteur;

        return $this;
    }

    /**
     * Get emailAuteur
     *
     * @return string 
     */
    public function getEmailAuteur()
    {
        return $this->emailAuteur;
    }

    /**
     * Set sitAuteur
     *
     * @param string $sitAuteur
     * @return Auteur
     */
    public function setSitAuteur($sitAuteur)
    {
        $this->sitAuteur = $sitAuteur;

        return $this;
    }

    /**
     * Get sitAuteur
     *
     * @return string 
     */
    public function getSitAuteur()
    {
        return $this->sitAuteur;
    }

    /**
     * Set compteAuteur
     *
     * @param string $compteAuteur
     * @return Auteur
     */
    public function setCompteAuteur($compteAuteur)
    {
        $this->compteAuteur = $compteAuteur;

        return $this;
    }

    /**
     * Get compteAuteur
     *
     * @return string 
     */
    public function getCompteAuteur()
    {
        return $this->compteAuteur;
    }

    /**
     * Get idAuteur
     *
     * @return integer 
     */
    public function getIdAuteur()
    {
        return $this->idAuteur;
    }
}
