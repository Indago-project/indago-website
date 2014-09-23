<?php

namespace Indago\GeneralBundle\Twig\Extension;


class TwigExtension extends \Twig_Extension
{
	public function getFilters()
	{
		return array(
				'price' => new \Twig_Filter_Method($this, 'priceFilter'),
		);
	}

	public function getFunctions()
	{
		return array(
				'breadcrumbGlobal' => new \Twig_Function_Method($this, 'breadcrumb'),
		);
	}
	
	public function breadcrumb($breadcrumb){
		$bread = "";
		foreach ($breadcrumb as $value){
			$bread .="<a href=".$value[0].">".$value[1]."</a>>";
		}
		return $bread;
	}
	
	
	public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
	{
		$price = number_format($number, $decimals, $decPoint, $thousandsSep);
		$price = '$' . $price;
	
		return $price;
	}
	
	public function getName()
	{
		return 'twig_extension';
	}
}
