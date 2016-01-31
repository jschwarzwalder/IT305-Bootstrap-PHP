<?php
	// Functions to validate the pizza form
    
     function validName($string){
            return ctype_alpha($string) AND !empty($string);
        } else {
            return false;
        }

?>
