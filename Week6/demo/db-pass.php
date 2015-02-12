<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        //use this to get data from the post
        $userPass = filter_input(INPUT_POST,'pass');
       $userPassHash = sha1($userPass);
            $passcode = sha1('hidden');
            
                      if($passcode == $userPassHash){
                          echo '<p>Passcode accepted</p>';
                      }else{
                          echo '<p>Passcode NOT accepted</p>';
                      }
        
        
        ?>
        
        <form action="#" method="post">
            
           Passcode: <input type="password" name="pass" value="" />
            
            <input type="submit" value="submit" />
            
        </form>
        
    </body>
</html>