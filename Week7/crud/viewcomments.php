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
        // put your code here
        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
        $dbs = $db->prepare('select * from comments');
        
         if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
          
        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
         
        print_r($results);
         }
         
        
        
        
        
        ?>
    </body>
</html>
