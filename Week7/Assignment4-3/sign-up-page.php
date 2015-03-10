






<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
        
        <h1> Sign Up! </h1>
        
          <?php 
         if (count ($errors) > 0) { ?>
    <h2>Errors:</h2>
    <ul>
        <?php 
         
        foreach($errors as $error) { ?>
            <li><?php echo $error; ?></li>
        <?php } ?>
    </ul>
          <?php } ?>
        
        
        
        <?php
              //put your code here
        //if ( isset($err_msg) ) {
            //echo '<p>',$err_msg,'</p>';
            
            
        //}
        ?>
        
                
        <form action="process-add.php" method="post">
            Email: <input name="email" value="" /> <br />
            Password: <input name="password" value="" /> <br />    
                       
            <input type="submit" value="Submit" />
        </form>
        
    
</html>