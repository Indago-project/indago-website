<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Source
 *
 * @ORM\Table(name="source", indexes={@ORM\Index(name="IDX_5F8A7F73EF06DDFD", columns={"id_articles"})})
 * @ORM\Entity(repositoryClass="Indago\GeneralBundle\Entity\SourceRepository")
 */
class Source
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_source", type="string", length=100, nullable=true)
     */
    private $nomSource;

    /**
     * @var string
     *
     * @ORM\Column(name="url_source", type="string", length=200, nullable=true)
     */
    private $urlSource;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_source", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="source_id_source_seq", allocationSize=1, initialValue=1)
     */
    private $idSource;

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
     * Set nomSource
     *
     * @param string $nomSource
     * @return Source
     */
    public function setNomSource($nomSource)
    {
        $this->nomSource = $nomSource;

        return $this;
    }

    /**
     * Get nomSource
     *
     * @return string 
     */
    public function getNomSource()
    {
        return $this->nomSource;
    }

    /**
     * Set urlSource
     *
     * @param string $urlSource
     * @return Source
     */
    public function setUrlSource($urlSource)
    {
        $this->urlSource = $urlSource;

        return $this;
    }

    /**
     * Get urlSource
     *
     * @return string 
     */
    public function getUrlSource()
    {
        return $this->urlSource;
    }

    /**
     * Get idSource
     *
     * @return integer 
     */
    public function getIdSource()
    {
        return $this->idSource;
    }

    /**
     * Set idArticles
     *
     * @param \Indago\GeneralBundle\Entity\Articles $idArticles
     * @return Source
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
