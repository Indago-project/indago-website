<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="Utilisateur")
 * @ORM\Entity(repositoryClass="Indago\GeneralBundle\Entity\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_utisateur", type="string", length=100, nullable=true)
     */
    private $nomUtisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_utilisateur", type="string", length=100, nullable=true)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_utilisateur", type="string", length=100, nullable=true)
     */
    private $emailUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=40, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_passe", type="string", length=200, nullable=true)
     */
    private $motPasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="Utilisateur_id_utilisateur_seq", allocationSize=1, initialValue=1)
     */
    private $idUtilisateur;



    /**
     * Set nomUtisateur
     *
     * @param string $nomUtisateur
     * @return Utilisateur
     */
    public function setNomUtisateur($nomUtisateur)
    {
        $this->nomUtisateur = $nomUtisateur;

        return $this;
    }

    /**
     * Get nomUtisateur
     *
     * @return string 
     */
    public function getNomUtisateur()
    {
        return $this->nomUtisateur;
    }

    /**
     * Set prenomUtilisateur
     *
     * @param string $prenomUtilisateur
     * @return Utilisateur
     */
    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    /**
     * Get prenomUtilisateur
     *
     * @return string 
     */
    public function getPrenomUtilisateur()
    {
        return $this->prenomUtilisateur;
    }

    /**
     * Set emailUtilisateur
     *
     * @param string $emailUtilisateur
     * @return Utilisateur
     */
    public function setEmailUtilisateur($emailUtilisateur)
    {
        $this->emailUtilisateur = $emailUtilisateur;

        return $this;
    }

    /**
     * Get emailUtilisateur
     *
     * @return string 
     */
    public function getEmailUtilisateur()
    {
        return $this->emailUtilisateur;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Utilisateur
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set motPasse
     *
     * @param string $motPasse
     * @return Utilisateur
     */
    public function setMotPasse($motPasse)
    {
        $this->motPasse = $motPasse;

        return $this;
    }

    /**
     * Get motPasse
     *
     * @return string 
     */
    public function getMotPasse()
    {
        return $this->motPasse;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
}
