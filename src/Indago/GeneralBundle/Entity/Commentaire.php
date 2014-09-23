<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="Commentaire", indexes={@ORM\Index(name="IDX_E16CE76B5E5C27E9", columns={"iduser"})})
 * @ORM\Entity(repositoryClass="Indago\GeneralBundle\Entity\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="idArticles", type="integer", nullable=true)
     */
    private $idarticles;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentaire", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="Commentaire_id_commentaire_seq", allocationSize=1, initialValue=1)
     */
    private $idCommentaire;

    /**
     * @var \Indago\GeneralBundle\Entity\Ulisateur
     *
     * @ORM\ManyToOne(targetEntity="Indago\GeneralBundle\Entity\Ulisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id_utilisateur")
     * })
     */
    private $iduser;



    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set idarticles
     *
     * @param integer $idarticles
     * @return Commentaire
     */
    public function setIdarticles($idarticles)
    {
        $this->idarticles = $idarticles;

        return $this;
    }

    /**
     * Get idarticles
     *
     * @return integer 
     */
    public function getIdarticles()
    {
        return $this->idarticles;
    }

    /**
     * Get idCommentaire
     *
     * @return integer 
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set iduser
     *
     * @param \Indago\GeneralBundle\Entity\Ulisateur $iduser
     * @return Commentaire
     */
    public function setIduser(\Indago\GeneralBundle\Entity\Ulisateur $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Indago\GeneralBundle\Entity\Ulisateur 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
