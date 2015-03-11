<?php 
class Validation {
            //Validates if password is valid
            public function passwordIsValid ($password)
            {
            if (   strlen($password) < 4 || empty($password) ) 
                {
                return false;
                }
            else 
                {
                return true;
                }
            }
            
////////////////////////////////////////////////////////////////////////////////            
            public function emailExist($email)
             {  
                $pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
                $dbs = $pdo->prepare('select * from signup where email = :email');                
                $dbs->bindParam(':email', $email, PDO::PARAM_STR);
                
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) 
                {
                return true;
                } 
            else 
                {
                return false;
                }                
            }
////////////////////////////////////////////////////////////////////////////////
   //Function to validate the email
            public function emailIsValid( $email ) {
            if ( !is_string($email) || empty($email)  ) {
                
                return false;
                
            } else {
                
                if (  filter_var($email, FILTER_VALIDATE_EMAIL) == false)               
                {
                    return false;
                }
                else
                {
                    return true;
                }
            }
        }
           
////////////////////////////////////////////////////////////////////////////////            
            public function sucessfulLogin($email, $password)
            {
                $pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
                $dbs = $pdo->prepare('select * from signup where email = :email and password = :password');                
                $dbs->bindParam(':email', $email, PDO::PARAM_STR);
                $dbs->bindParam(':password', $password, PDO::PARAM_STR);       
                
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) 
                {
                return true;
                } 
            else 
                {
                return false;
                }                
            }
            
          
}
            ?>