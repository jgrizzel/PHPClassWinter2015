<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $fname = filter_input(INPUT_POST, 'fname');
        var_dump($fname);
        ?>
        
        <form action="#" method="post">
            
            Full Name<input type="text" name="fname" value=""/> <br/>
            
            <input type="submit" value="Submit"/>
        </form>
        
        
    </body>
</html>
