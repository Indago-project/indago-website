<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FluxRss
 *
 * @ORM\Table(name="Flux_rss", indexes={@ORM\Index(name="IDX_5D8EAC97B029E316", columns={"id_site_ref"})})
 * @ORM\Entity(repositoryClass="Indago\GeneralBundle\Entity\FluxRssRepository")
 */
class FluxRss
{
    /**
     * @var string
     *
     * @ORM\Column(name="xpath_flux_rss", type="string", length=200, nullable=true)
     */
    private $xpathFluxRss;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_flux_rss", type="string", length=200, nullable=true)
     */
    private $lienFluxRss;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_flux_rss", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="Flux_rss_id_flux_rss_seq", allocationSize=1, initialValue=1)
     */
    private $idFluxRss;

    /**
     * @var \Indago\GeneralBundle\Entity\Sitereferent
     *
     * @ORM\ManyToOne(targetEntity="Indago\GeneralBundle\Entity\Sitereferent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_site_ref", referencedColumnName="id_site_ref")
     * })
     */
    private $idSiteRef;



    /**
     * Set xpathFluxRss
     *
     * @param string $xpathFluxRss
     * @return FluxRss
     */
    public function setXpathFluxRss($xpathFluxRss)
    {
        $this->xpathFluxRss = $xpathFluxRss;

        return $this;
    }

    /**
     * Get xpathFluxRss
     *
     * @return string 
     */
    public function getXpathFluxRss()
    {
        return $this->xpathFluxRss;
    }

    /**
     * Set lienFluxRss
     *
     * @param string $lienFluxRss
     * @return FluxRss
     */
    public function setLienFluxRss($lienFluxRss)
    {
        $this->lienFluxRss = $lienFluxRss;

        return $this;
    }

    /**
     * Get lienFluxRss
     *
     * @return string 
     */
    public function getLienFluxRss()
    {
        return $this->lienFluxRss;
    }

    /**
     * Get idFluxRss
     *
     * @return integer 
     */
    public function getIdFluxRss()
    {
        return $this->idFluxRss;
    }

    /**
     * Set idSiteRef
     *
     * @param \Indago\GeneralBundle\Entity\Sitereferent $idSiteRef
     * @return FluxRss
     */
    public function setIdSiteRef(\Indago\GeneralBundle\Entity\Sitereferent $idSiteRef = null)
    {
        $this->idSiteRef = $idSiteRef;

        return $this;
    }

    /**
     * Get idSiteRef
     *
     * @return \Indago\GeneralBundle\Entity\Sitereferent 
     */
    public function getIdSiteRef()
    {
        return $this->idSiteRef;
    }
}
