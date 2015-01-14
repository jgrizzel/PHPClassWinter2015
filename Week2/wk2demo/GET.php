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
        
        <a href="?name=gabriel&email=test@test.com">test link</a>
        <?php
        var_dump($_GET);
        
        echo $_GET['name'], '<br />', $_GET['email']
        ?>
    </body>
</html>
