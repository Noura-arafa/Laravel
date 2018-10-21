<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function getArea()
    {
    	
		$countries = countries();  
		$area = array();
		foreach ($countries as $key => $country) {
			$country["area"] =country($country["iso_3166_1_alpha2"])->getArea();
			array_push($area, $country);
			
		}
		return $area; 


		
    }
}
