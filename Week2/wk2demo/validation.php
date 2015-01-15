<!DOCTYPE html>

        <?php
        $name = '';
        $email = '';
        $num = '';
        $err_msg = '';
        
        if (!empty ($_POST))
        {
          $name = $_POST['fname'];
          $email=$_POST['email'];
          $num = $_POST['number'];
          
           if ( !is_string($name) || empty($name) ) {
           $err_msg .= '<p>Please enter a name</p>';}
                    
           if ( !is_string($email) || empty($email) ) {
           $err_msg .= '<p>Please enter an email</p>';}
                    
           if ( !is_numeric($num) || empty($num) ) {
           $err_msg .= '<p>Please enter a num</p>';}
                    
        }
        
        ?>
