<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sitereferent
 *
 * @ORM\Table(name="SiteReferent", indexes={@ORM\Index(name="IDX_90311674EF06DDFD", columns={"id_articles"}), @ORM\Index(name="IDX_903116746B3CA4B", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="Indago\GeneralBundle\Entity\SiteReferentRepository")
 */
class Sitereferent
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_site_ref", type="string", length=200, nullable=true)
     */
    private $nomSiteRef;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_site_ref", type="string", length=200, nullable=true)
     */
    private $lienSiteRef;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_site_ref", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="SiteReferent_id_site_ref_seq", allocationSize=1, initialValue=1)
     */
    private $idSiteRef;

    /**
     * @var \Indago\GeneralBundle\Entity\Ulisateur
     *
     * @ORM\ManyToOne(targetEntity="Indago\GeneralBundle\Entity\Ulisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_utilisateur")
     * })
     */
    private $idUser;

    /**
     * @var \Indago\GeneralBundle\Entity\Articles
     *
     * @ORM\ManyToOne(targetEntity="Indago\GeneralBundle\Entity\Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_articles", referencedColumnName="id_article")
     * })
     */
    private $idArticles;



    /**
     * Set nomSiteRef
     *
     * @param string $nomSiteRef
     * @return Sitereferent
     */
    public function setNomSiteRef($nomSiteRef)
    {
        $this->nomSiteRef = $nomSiteRef;

        return $this;
    }

    /**
     * Get nomSiteRef
     *
     * @return string 
     */
    public function getNomSiteRef()
    {
        return $this->nomSiteRef;
    }

    /**
     * Set lienSiteRef
     *
     * @param string $lienSiteRef
     * @return Sitereferent
     */
    public function setLienSiteRef($lienSiteRef)
    {
        $this->lienSiteRef = $lienSiteRef;

        return $this;
    }

    /**
     * Get lienSiteRef
     *
     * @return string 
     */
    public function getLienSiteRef()
    {
        return $this->lienSiteRef;
    }

    /**
     * Get idSiteRef
     *
     * @return integer 
     */
    public function getIdSiteRef()
    {
        return $this->idSiteRef;
    }

    /**
     * Set idUser
     *
     * @param \Indago\GeneralBundle\Entity\Ulisateur $idUser
     * @return Sitereferent
     */
    public function setIdUser(\Indago\GeneralBundle\Entity\Ulisateur $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Indago\GeneralBundle\Entity\Ulisateur 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idArticles
     *
     * @param \Indago\GeneralBundle\Entity\Articles $idArticles
     * @return Sitereferent
     */
    public function setIdArticles(\Indago\GeneralBundle\Entity\Articles $idArticles = null)
    {
        $this->idArticles = $idArticles;

        return $this;
    }

    /**
     * Get idArticles
     *
     * @return \Indago\GeneralBundle\Entity\Articles 
     */
    public function getIdArticles()
    {
        return $this->idArticles;
    }
}
