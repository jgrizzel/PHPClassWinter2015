<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        // put your code here
        if ( !isset($_SESSION['loggedin']) 
                || $_SESSION['loggedin'] !== true 
            ) {
            header('Location: login.php');
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

