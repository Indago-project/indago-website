<?php

namespace Indago\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="IndagoGeneralBundle:MenuRepository")
 */
class Menu
{
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="menu_id", type="bigint")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="menu_id_seq", allocationSize=1, initialValue=1)
	 */
	private $menuId;
    /**
     * @var string
     *
     * @ORM\Column(name="nom_menu", type="string", length=128, nullable=true)
     */
    private $nomMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=300, nullable=true)
     */
    private $Route;
 
    
    public function __construct()
    {
    	
    }


    /**
     * Set nomMenu
     *
     * @param string $nomMenu
     * @return Menu
     */
    public function setNomMenu($nomMenu)
    {
        $this->nomMenu = $nomMenu;

        return $this;
    }

    /**
     * Get nomMenu
     *
     * @return string 
     */
    public function getNomMenu()
    {
        return $this->nomMenu;
    }

    /**
     * Set Route
     *
     * @param string $route
     * @return Menu
     */
    public function setRoute($route)
    {
        $this->Route = $route;

        return $this;
    }

    /**
     * Get Route
     *
     * @return string 
     */
    public function getRoute()
    {
        return $this->Route;
    }

    /**
     * Get menuId
     *
     * @return integer 
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

}
