<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1> Sign Up! </h1>
        <?php
        // put your code here
        if ( isset($err_msg) ) {
            echo '<p>',$err_msg,'</p>';
        }
        ?>   
        
        <form action="process-add.php" method="post">
            Email: <input name="email" value="" /> <br />
            Password: <input name="password" value="" /> <br />    
                       
            <input type="submit" value="Submit" />
        </form>
        
    </body>
</html>