<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        if ( !isset($_SESSION['loggedin']) 
                || $_SESSION['loggedin'] !== true 
            ) {
            include_once('login.php');
            exit();
            //die('Access not allowed');
        }
 else {
     include_once './header.php';
 }
        
         ?>
        
        <h1>Admin Page</h1>
    </body>
</html>

