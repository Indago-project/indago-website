<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="IDX_BFDD3168C9486A13", columns={"id_categorie"}), @ORM\Index(name="IDX_BFDD3168236D04AD", columns={"id_auteur"})})
 * @ORM\Entity(repositoryClass="Indago\GeneralBundle\Entity\ArticlesRepository")
 */
class Articles
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre_article", type="string", length=200, nullable=true)
     */
    private $titreArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_article", type="text", nullable=true)
     */
    private $contenuArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="couv_article", type="string", length=100, nullable=true)
     */
    private $couvArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_article", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="articles_id_article_seq", allocationSize=1, initialValue=1)
     */
    private $idArticle;

    /**
     * @var \Indago\GeneralBundle\Entity\Auteur
     *
     * @ORM\ManyToOne(targetEntity="Indago\GeneralBundle\Entity\Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auteur", referencedColumnName="id_auteur")
     * })
     */
    private $idAuteur;

    /**
     * @var \Indago\GeneralBundle\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="Indago\GeneralBundle\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie")
     * })
     */
    private $idCategorie;



    /**
     * Set titreArticle
     *
     * @param string $titreArticle
     * @return Articles
     */
    public function setTitreArticle($titreArticle)
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    /**
     * Get titreArticle
     *
     * @return string 
     */
    public function getTitreArticle()
    {
        return $this->titreArticle;
    }

    /**
     * Set contenuArticle
     *
     * @param string $contenuArticle
     * @return Articles
     */
    public function setContenuArticle($contenuArticle)
    {
        $this->contenuArticle = $contenuArticle;

        return $this;
    }

    /**
     * Get contenuArticle
     *
     * @return string 
     */
    public function getContenuArticle()
    {
        return $this->contenuArticle;
    }

    /**
     * Set couvArticle
     *
     * @param string $couvArticle
     * @return Articles
     */
    public function setCouvArticle($couvArticle)
    {
        $this->couvArticle = $couvArticle;

        return $this;
    }

    /**
     * Get couvArticle
     *
     * @return string 
     */
    public function getCouvArticle()
    {
        return $this->couvArticle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Articles
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get idArticle
     *
     * @return integer 
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set idAuteur
     *
     * @param \Indago\GeneralBundle\Entity\Auteur $idAuteur
     * @return Articles
     */
    public function setIdAuteur(\Indago\GeneralBundle\Entity\Auteur $idAuteur = null)
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    /**
     * Get idAuteur
     *
     * @return \Indago\GeneralBundle\Entity\Auteur 
     */
    public function getIdAuteur()
    {
        return $this->idAuteur;
    }

    /**
     * Set idCategorie
     *
     * @param \Indago\GeneralBundle\Entity\Categorie $idCategorie
     * @return Articles
     */
    public function setIdCategorie(\Indago\GeneralBundle\Entity\Categorie $idCategorie = null)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return \Indago\GeneralBundle\Entity\Categorie 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }
}
