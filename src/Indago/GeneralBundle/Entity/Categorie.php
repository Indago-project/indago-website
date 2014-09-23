<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="Categorie")
 * @ORM\Entity(repositoryClass="Indago\GeneralBundle\Entity\CategorieRepository")
 */
class Categorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_categorie", type="string", length=100, nullable=true)
     */
    private $libelleCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categorie", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="Categorie_id_categorie_seq", allocationSize=1, initialValue=1)
     */
    private $idCategorie;



    /**
     * Set libelleCategorie
     *
     * @param string $libelleCategorie
     * @return Categorie
     */
    public function setLibelleCategorie($libelleCategorie)
    {
        $this->libelleCategorie = $libelleCategorie;

        return $this;
    }

    /**
     * Get libelleCategorie
     *
     * @return string 
     */
    public function getLibelleCategorie()
    {
        return $this->libelleCategorie;
    }

    /**
     * Get idCategorie
     *
     * @return integer 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }
}
