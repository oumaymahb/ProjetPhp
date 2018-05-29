<?php
include_once'../../models/RateMe.php';
class RateMeController{
     public function __construct()
    {

    }
    public function RateMe($rates){
    	$s=0;
    	
    	foreach($rates as $valeur)
		{
			$s=$s+1;
	  	}
	  	$v=($s*100)/5 ;
	  	$r=new RateMe($v);
	  	return $r->addRate();
    }

}