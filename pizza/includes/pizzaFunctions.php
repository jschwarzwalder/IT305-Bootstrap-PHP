<?php
	// Functions to validate the pizza form
    
     function validName($string){
        if (ctype_alpha($string) && !empty($string)){
            return true;
        } else {
            return false;
        }
     }


?>