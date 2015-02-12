<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Read</title>
    </head>
    <body>
        <?php
$db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
  
 $dbs = $db->prepare('select * from users');  
        
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
          
        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
      
  echo '<table>';
       foreach ($results as $value) {  ?>
           <tr>
               <td> <?php echo  $value["fullname"]; ?> </td>
               <td> <?php echo  $value["email"]; ?> </td>
               <td> <?php echo $value["phone"]; ?> </td>
               <td> <?php echo  $value["zip"]; ?> </td>
           </tr>   


    <?php }
    echo '</table>';
       }
            else {echo 'No results found';}
    ?>
    
    </body>
</html>
