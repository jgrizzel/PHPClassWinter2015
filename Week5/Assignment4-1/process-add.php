<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php        
        // do error handling before you continue
            $err_msg = '';
            if (empty($_POST) ) {
               $err_msg = 'Please enter Data';
               include './sign-up-page.php';
              exit();
            }            
            if(!empty($_POST)){
            // remember to change the port
             $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
  
            $dbs = $db->prepare('insert into signup set email = :email, password = :password');  
 
            //collect the data to bind
            $email = $_POST['email'];
            $password = $_POST['password'];
            
           if ( !is_string($email) || empty($email) ) 
            {
                $err_msg .= '<p>Please enter an email</p>';
            }
           if (  $password < 4 || empty($password) ) 
            {
                $err_msg .=  '<p>Password must be greater than 3 characters</p>';
            }
        
        echo '<p>',$err_msg,'</p>';
        include './sign-up-page.php';
            }
         if (empty ($err_msg))
            {
                
            
            // you must bind the data before you execute
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);

            
            // if the execute works, then you will see the sucess message
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    echo '<p> The email ',$email, ' was added</p>';
            } else {
                 echo '<h2> The email ',$email, ' was <strong>NOT</strong> added</h2>';
            
            }       
        }
        
        ?>
    </body>
</html>