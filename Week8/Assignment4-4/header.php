<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="sign-up-page.php">Sign Up</a>&nbsp;&nbsp;
        <?php
if ( isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ) {
   echo '<a href="?logout=1">Logout</a>';
}
    else 
      {
        echo '<a href="login.php">Login</a>';
      }
    $logout = filter_input(INPUT_GET, 'logout');
   
    if ( $logout == 1 ) {
       $_SESSION['loggedin'] = false;       
       include'./login.php';
    }
    
    
?>
        <br />
        <br/>
    </body>
</html>

