<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php   
        $email='';
        $fname='';
        $number=0;
        
        ?>
        <form action="post_process.php" method="post">
            
            Name: <input name="fname" type="text" value="" />
            <br />
            Email: <input name="email" type="text" value="" />
            <br />
            Number: <input name="number" type="number" value="" />
            
            <input type="submit" value="submit" />
        </form>
        
        
     
    </body>
</html>
