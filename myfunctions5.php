<?php
    /* validName returns true if $string is
     * not empty and is alphabetic.
     */
        function validName($string){
            return ctype_alpha($string) AND !empty($string);
        }
    
    /* validYear returns true if $string is  
     * not empty and is numeric and contains 
     * 4 digits and is after 1800. 
     */
        function validYear($string){
            return !empty($string)  AND is_numeric($string) 
                                    AND strlen($string) == 4
                                    AND $string >= 1800;
         }
         
           /* validCreditCard returns true returns true if
            *  a credit card number is not blank,
            *  and is all numeric,
            *  after the dashes and spaces have been removed
            */
         function validCreditCard($card_num)  	{
            //Remove dashes and spaces
            $card_num = str_replace("-", "", $card_num);
            $card_num = str_replace(" ", "", $card_num);
            
            //credit card number is not blank
            if (!empty($card_num)) {
                //credit card is all numeric
                if (is_numeric($card_num)) {
                    return true;
                }
            }	else {
                return false;
            }
	}
    
    ?>
