<?php

/**
 * Description of Validation
 *
 * @author GFORTI
 */
class Validation {
    
    function emailIsValid( $email ) {
        if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
           return true;
        } else {
            return false;
        }
   }
    
   
   function fullNameIsValid( $name ) {
        if ( !empty($name) ) {
            return true;
        } else {
            return false;
        }
    }
    
}