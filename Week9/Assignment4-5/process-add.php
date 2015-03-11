<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php        
        // do error handling before you continue
            $errors = array();         
            if (empty($_POST) ) {
               $errors[] = 'Please enter Data';
               include './sign-up-page.php';
              exit();
            }  
            
            if(!empty($_POST))
                {
            // remember to change the port
             $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
  
            $dbs = $db->prepare('insert into signup set email = :email, password = :password');  
            
            //collect the data to bind
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            //Function to validate the email
            function emailIsValid( $email ) {
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
        
        //Validates if password is valid
            function passwordIsValid ($password){
                if (   strlen($password) < 4 || empty($password) ) 
            {
                return false;
            }
            else 
            {
                return true;
            }
            }
            
            
             function emailExist($email){
                $pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
                $dbs = $pdo->prepare('select * from signup where email = :email');                
                $dbs->bindParam(':email', $email, PDO::PARAM_STR);
                
                 if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                        return true;
                } else {
                     return false;
                }                
            }
            
            
            if(emailExist($email)){
                $errors[] = 'Email already exist.';
            }
            
           
           if ( !emailIsValid($email) )               
            {
                $errors[] = 'Please enter a valid email.';
            }
            
           if (  !passwordIsValid($password) ) 
            {
                $errors[] =  'Password must be greater than 3 characters';
            }      
       
            include './sign-up-page.php';
            }
            
         if (empty ($errors))
            {
                $password = filter_input(INPUT_POST, 'password');
                // add validaion
                $password = sha1($password);  
        
        
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