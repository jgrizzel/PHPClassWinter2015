<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if ( !empty($_POST) ) {
                
                $email = filter_input(INPUT_POST, 'email');
                $password = filter_input(INPUT_POST, 'password');
                $pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
                $dbs = $pdo->prepare('select * from signup where email = :email, password = :password');
                $dbs->bindParam(':email', $email, PDO::PARAM_STR);
                $dbs->bindParam(':password', $password, PDO::PARAM_STR);
                
                if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                        echo '<h1> Log in was successful</h1>';
                } else {
                     echo '<h1> Log in was NOT successful</h1>';
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