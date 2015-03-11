<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        include './header.php';
        include './validator.class.php';
        
        $validate = new Validation();
        
            if ( !empty($_POST) ) {            
                
                $email = filter_input(INPUT_POST, 'email');
                $password = filter_input(INPUT_POST, 'password'); 
                $password = sha1($password);
                
             
            
            
          if($validate->sucessfulLogin($email, $password)== false){
            echo '<h1> Log in was NOT successful</h1>';
          }else
          {
              echo '<h1> Log in was successful</h1>';
              
              $_SESSION['loggedin'] = true;
              header('Location: admin.php');
              exit();
          }
            
          }
          
          ?>
        
        
        
          <form action="#" method="post">            
           Email: <input type="text" name="email" value="" />            
           Password: <input type="text" name="password" value="" />            
            <input type="submit" value="submit" />            
        </form>
        
        
    </body>
</html>