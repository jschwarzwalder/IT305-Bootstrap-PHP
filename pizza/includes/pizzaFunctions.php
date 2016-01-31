<?php
	// Functions to validate the pizza form
    
     function validName($string){
        if (ctype_alpha($string) && !empty($string)){
            return true;
        } else {
            return false;
        }
     }
	 
	 function validDelivery($option) {
		 if ($option == "pickup" || $option == "delivery") {
			return true;
		 } else {
			return false;
		 }
		 
	 }
	 
	 function validToppings($toppings){
	  //toppings array
	  $ToppingOptions = array('pepperoni', 'sausage', 'olives',  'artichokes', 'anchovies' );
	  
	  //is topping selected?
	  foreach ($toppings as $topping) {
		 if (!in_array($topping, $ToppingOptions)) {
			return false;
		 }
	  }
	  
	  return true;
	  }
	  
	  

?>